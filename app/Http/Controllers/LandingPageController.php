<?php
namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\RailwayLine;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log; // ログ出力用
use Illuminate\Support\Facades\Cache; // キャッシュ用（オプション）

class LandingPageController extends Controller
{
    public function index()
    {
        $rssUrl  = 'https://note.com/joyous_camel6113/rss'; 
        $cacheKey      = 'note_feed_items_' . md5($rssUrl);
        $cacheDuration = now()->addHours(1); // 1時間キャッシュ
Cache::forget($cacheKey);
          try {
         $feedItems = Cache::remember($cacheKey, $cacheDuration, function () use ($rssUrl) {
                // ... (Guzzleでの取得、XMLパース、名前空間取得までは前回と同様) ...
                Log::info("[Note RSS Fetch] Attempting to fetch RSS from: " . $rssUrl);
                $client = new Client(['timeout' => 15, 'connect_timeout' => 7]);
                $response = $client->get($rssUrl, ['http_errors' => false]);

                if ($response->getStatusCode() !== 200) {
                    Log::error("[Note RSS Fetch] Failed. Status: " . $response->getStatusCode() . " Body: " . substr($response->getBody(), 0, 500));
                    return ['error' => 'RSSフィードの取得に失敗しました。ステータスコード: ' . $response->getStatusCode()];
                }

                $xmlString = $response->getBody()->getContents();
                Log::info("[Note RSS Parse] Fetched XML String (first 300 chars): " . substr($xmlString, 0, 300));

                libxml_use_internal_errors(true);
                $rss = simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_NOCDATA);

                if ($rss === false) {
                    $xmlErrors = [];
                    foreach (libxml_get_errors() as $error) { $xmlErrors[] = $error->message; }
                    libxml_clear_errors();
                    Log::error("[Note RSS Parse] Failed to parse XML. Errors: " . implode(', ', $xmlErrors));
                    return ['error' => 'RSSフィードの解析に失敗しました。'];
                }

                $namespaces = $rss->getNamespaces(true); 
                Log::debug("[Note RSS Parse] RSS Namespaces: " . print_r($namespaces, true));


                $items = [];
                if (isset($rss->channel->item)) {
                    $itemCounter = 0;
                    foreach ($rss->channel->item as $item) {
                        $itemCounter++;
                        $imageUrl = null;
                        $itemTitle = (string)$item->title;

                        Log::info("------------------- Processing Item {$itemCounter}: {$itemTitle} -------------------");
                        // Log::debug("[Item XML] " . $item->asXML()); // 必要ならコメント解除

                        // 1. media:thumbnail の試行
                        if (isset($namespaces['media'])) {
                            $media_ns = $namespaces['media'];
                            $media_content = $item->children($media_ns); 
                            
                            Log::debug("[media:thumbnail] Attempting with media namespace: '{$media_ns}'. Children in media NS: " . ($media_content ? $media_content->asXML() : 'null'));

                            if ($media_content && isset($media_content->thumbnail)) {
                                // ★★★ 修正箇所 ★★★
                                $imageUrlCandidate = (string)$media_content->thumbnail; 
                                Log::debug("[media:thumbnail] Found <media:thumbnail>. Value: " . $imageUrlCandidate);

                                if (!empty($imageUrlCandidate) && (strpos($imageUrlCandidate, 'http://') === 0 || strpos($imageUrlCandidate, 'https://') === 0)) {
                                    $imageUrl = $imageUrlCandidate;
                                    Log::info("[media:thumbnail] SUCCESS: Image URL found directly in tag value: " . $imageUrl);
                                } else {
                                    Log::warning("[media:thumbnail] FAIL: Value of <media:thumbnail> is not a valid URL or is empty: " . $imageUrlCandidate);
                                }
                            } else {
                                Log::warning("[media:thumbnail] FAIL: <media:thumbnail> tag not found under media namespace for this item.");
                            }
                        } else {
                            Log::info("[media:thumbnail] SKIP: 'media' namespace not declared in RSS root.");
                        }

                        // 2. enclosure タグ の試行 (フォールバックとして残す)
                        if (!$imageUrl && isset($item->enclosure)) {
                            // ... (enclosureの処理は変更なし) ...
                            $enclosure_attrs = $item->enclosure->attributes();
                            Log::debug("[enclosure] Attempting. Attributes: " . print_r($enclosure_attrs, true));
                            if (isset($enclosure_attrs['url']) && isset($enclosure_attrs['type']) && strpos((string)$enclosure_attrs['type'], 'image') !== false) {
                                $imageUrl = (string)$enclosure_attrs['url'];
                                Log::info("[enclosure] SUCCESS: Image URL found: " . $imageUrl);
                            } else {
                                Log::warning("[enclosure] FAIL: 'url' or 'type' attribute invalid or missing.");
                            }
                        }

                        // 3. description / content:encoded 内の <img> タグの試行 (フォールバックとして残す)
                        if (!$imageUrl) {
                            // ... (imgタグ検索の処理は変更なし) ...
                            Log::debug("[img tag] Attempting search in description/content:encoded.");
                            $content_to_search = '';
                            if (isset($namespaces['content']) && isset($item->children($namespaces['content'])->encoded)) {
                                $content_to_search = (string)$item->children($namespaces['content'])->encoded;
                                Log::debug("[img tag] Searching in content:encoded (length: " . strlen($content_to_search) . ").");
                            }
                            if (empty($content_to_search) && isset($item->description)) {
                                $content_to_search = (string)$item->description;
                                Log::debug("[img tag] Searching in description (length: " . strlen($content_to_search) . ").");
                            }

                            if (!empty($content_to_search)) {
                                if (preg_match('/<img[^>]+src\s*=\s*["\']([^"\'>\s]+)["\'][^>]*>/i', $content_to_search, $matches)) {
                                    $imageUrl = $matches[1];
                                    Log::info("[img tag] SUCCESS: Image URL found: " . $imageUrl);
                                } else {
                                    Log::warning("[img tag] FAIL: No <img> tag with src found. Content snippet (first 100 chars of stripped): " . substr(strip_tags(html_entity_decode($content_to_search)),0,100) );
                                }
                            } else {
                                Log::info("[img tag] SKIP: No description or content:encoded to search in.");
                            }
                        }
                        
                        if ($imageUrl) {
                            Log::info("[Result] Final Image URL for '{$itemTitle}': " . $imageUrl);
                        } else {
                            Log::warning("[Result] No Image URL found for '{$itemTitle}'.");
                        }

                        $items[] = [
                            'title'       => $itemTitle,
                            'link'        => (string)$item->link,
                            'pubDate'     => Carbon::parse((string)$item->pubDate),
                            'description' => strip_tags((string)$item->description),
                            'image'       => $imageUrl,
                        ];
                    }
                } 
                // ... (ソート、件数絞り込み、returnは変更なし) ...
                usort($items, function ($a, $b) { return $b['pubDate']->timestamp <=> $a['pubDate']->timestamp; });
                return array_slice($items, 0, 6);
            });

            // Cache::remember がエラーメッセージを返した場合の処理
            if (isset($feedItems['error'])) {
                return view('index', ['error' => $feedItems['error'], 'feedItems' => []]);
            }
            // dd($feedItems);
            return view('index', compact('feedItems'));

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Log::error("Guzzle request exception while fetching RSS feed from {$rssUrl}: " . $e->getMessage());
            return view('note_articles', ['error' => 'RSSフィードの取得中に通信エラーが発生しました。', 'feedItems' => []]);
        } catch (\Exception $e) {
            Log::error("An unexpected error occurred: " . $e->getMessage());
            return view('note_articles', ['error' => '予期せぬエラーが発生しました。', 'feedItems' => []]);
        }
        
    }

    public function sale()
    {
        $sales = Property::saleOnly()->get();
        return view('sale', compact('sales'));
    }

    public function rent(Request $request)
    {
        $railwayLines = RailwayLine::get();
        $rent         = Property::with(['railwayLines:id,name'])
            ->select('id', 'image_path')
            ->orderBy('created_at', 'desc')
            ->paginate(45);

        return view('rent', compact('rent', 'railwayLines'));
    }

    public function ajaxSearch(Request $request)
    {

        $selectedRailways = $request->input('railways', []);
        $result           = [];
        if (in_array(1, $selectedRailways)) {
            $result['全路線'] = Property::select('image_path')->orderBy('created_at', 'desc')->get();
            return response()->json($result);
        }
        if (count($selectedRailways) > 0) {
            // 選択された路線ごとにデータを取得
            foreach ($selectedRailways as $railwayId) {
                $railway = RailwayLine::with(['properties' => function ($query) {
                    $query->orderBy('properties.created_at', 'desc');
                }])->find($railwayId);

                if ($railway) {
                    $result[$railway->name] = $railway->properties;
                }
            }
        }

        // JSON形式で結果を返す
        return response()->json($result);
    }

    public function company()
    {
        return view('company');
    }

    public function message()
    {
        return view('message');
    }

}