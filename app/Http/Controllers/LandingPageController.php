<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Property;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $rents = Property::rentOnly()->take(10)->get();
        $sales = Property::saleOnly()->take(10)->get();
        $is_brokerage_free = Property::rentOnly()->where('is_brokerage_free', true)->take(10)->get();
        $propertyPrices = Property::propertyPrices();
        // 最新の1件だけを取得
        $latestPost = Post::latest()->first();
        return view('index', compact('rents', 'sales','is_brokerage_free', 'latestPost', 'propertyPrices'));
    }

    public function sale()
    {
        $sales = Property::saleOnly()->get();
        return view('sale', compact('sales'));
    }

    public function rent(Request $request)
    {
        $price = $request->input('price');
        $is_new_building = $request->get('is_new_building');
        $is_brokerage_free = $request->get('is_brokerage_free');
        $propertyPrices = Property::propertyPrices();
        $query = Property::rentOnly();

        // 価格帯が指定されている場合の処理
        if ($price && $price != '指定無し') {
            $query->where('price', '=', $price);
        }

        // 新築のチェックがある場合の処理
        if ($is_new_building == '1') {
            $query->where('is_new_building', true);
        }

        // 仲介手数料無料のチェックがある場合の処理
        if ($is_brokerage_free == '1') {
            $query->where('is_brokerage_free', true);
        }

        // フィルタリング結果を取得
        $rents = $query->get();
        return view('rent', compact('rents','propertyPrices'));
    }

    public function isBrokerageFree()
    {
        $rents = Property::rentOnly()->where('is_brokerage_free', true)->get();
        $propertyPrices = Property::propertyPrices();
        return view('rent', compact('rents','propertyPrices'));
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