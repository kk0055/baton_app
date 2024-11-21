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
        $rent = Property::orderBy('created_at', 'desc')->get();

        return view('rent', compact('rent', 'railwayLines'));
    }

    public function ajaxSearch(Request $request)
    {

        $selectedRailways = $request->input('railways', []);
        $result = [];
        if (count($selectedRailways) > 0 ) {
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
        if (isset($result['指定無し']) && $result['指定無し']) {
            $result['指定無し'] = Property::orderBy('created_at', 'desc')->get();
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