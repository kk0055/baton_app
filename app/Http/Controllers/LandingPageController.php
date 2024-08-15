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
        $propertyPrices = Property::propertyPrices();
        // 最新の1件だけを取得
        $latestPost = Post::latest()->first();
        return view('index', compact('rents', 'sales', 'latestPost', 'propertyPrices'));
    }

    public function sale()
    {
        $sales = Property::saleOnly()->get();
        return view('sale', compact('sales'));
    }
    public function rent(Request $request)
    {
    $price = $request->input('price');

    // 価格帯が指定されている場合の処理
    if ($price) {
        $rents = Property::rentOnly()->where('price', '=', $price)->get();
    } else {
        // 価格帯が指定されていない場合のデフォルト処理
        $rents = Property::rentOnly()->get();
    }
        return view('rent', compact('rents'));
    }
    
    public function company()
    {
        return view('company');
    }

}