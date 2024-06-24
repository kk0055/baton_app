<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Post;

class LandingPageController extends Controller
{
    public function index()
    {
        $rents = Property::rentOnly()->take(10)->get();
        $sales = Property::saleOnly()->take(10)->get();
        // 最新の1件だけを取得
        $latestPost = Post::latest()->first();
        return view('index', compact('rents', 'sales','latestPost'));
    }

    public function sale()
    {
        $sales = Property::saleOnly()->get();
        return view('sale', compact('sales'));
    }
    public function rent()
    {
        $rents = Property::rentOnly()->get();
        return view('rent', compact('rents'));
    }
    public function company()
    {
        return view('company');
    }

}