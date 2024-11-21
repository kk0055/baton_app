<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\RailwayLine;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $rents = Property::rentOnly()->take(10)->get();

        return view('index', compact('rents'));
    }

    public function sale()
    {
        $sales = Property::saleOnly()->get();
        return view('sale', compact('sales'));
    }

    public function rent(Request $request)
    {
        $railwayLines = RailwayLine::get();
        // チェックボックスで選択された路線IDを取得
        $selectedRailways = $request->input('railways', []);

        // 結果を格納する配列
        $result = [];
        $rent = [];
        if (!empty($selectedRailways)) {
            // 選択された路線ごとにデータを取得
            foreach ($selectedRailways as $railwayId) {
                $railway = RailwayLine::with(['properties' => function ($query) {
                    $query->orderBy('properties.created_at', 'desc');
                }])->find($railwayId);

                if ($railway) {
                    $result[$railway->name] = $railway->properties;
                }
            }
        } else {
            // 選択されていない場合はすべての物件を新しい順に
            $rent = Property::orderBy('created_at', 'desc')->get();
        }

        if (isset($result['指定無し']) && $result['指定無し']) {
            $rent = Property::orderBy('created_at', 'desc')->get();
        }
        $denentoshi = isset($result['田園都市線']) ? $result['田園都市線'] : null;
        $odakyu = isset($result['小田急線']) ? $result['小田急線'] : null;
        $setagaya = isset($result['世田谷線']) ? $result['世田谷線'] : null;
        $toyoko = isset($result['東横線']) ? $result['東横線'] : null;
        $keio = isset($result['京王線']) ? $result['京王線'] : null;

    //     return view('rent', compact('rent', 'railwayLines', 'denentoshi', 'odakyu', 'setagaya', 'toyoko', 'keio'));
    // }
        return view('rent', compact('rent', 'result','railwayLines', 'denentoshi', 'odakyu', 'setagaya', 'toyoko', 'keio'));
    }

    public function isBrokerageFree()
    {
        $rents = Property::rentOnly()->where('is_brokerage_free', true)->get();
        $propertyPrices = Property::propertyPrices();
        return view('rent', compact('rents', 'propertyPrices'));
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