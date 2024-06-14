<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class LandingPageController extends Controller
{
    public function index()
    {
        $properties = Property::displayedAndOrdered()->get();
        return view('index', compact('properties'));
    }

    public function property()
    {
        return view('property');
    }
    public function about()
    {
        // Logic for displaying the about page
        return view('landing.about');
    }
}