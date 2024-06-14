<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class LandingPageController extends Controller
{
    public function index()
    {
        $rents = Property::rentOnly()->take(10)->get();
        $sales = Property::saleOnly()->take(10)->get();
        return view('index', compact('rents', 'sales'));
    }

    public function sale()
    {
        $sales = Property::saleOnly()->get();
        return view('sale', compact('sales'));
    }
    public function rent()
    {
        $sales = Property::rentOnly()->get();
        return view('rent', compact('rents'));
    }

}