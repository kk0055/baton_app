<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $properties = Property::orderByOrder()->get();
        $propertyPrices = Property::propertyPrices();
        return view('admin.property.index', compact('properties','propertyPrices'));
    }

    public function create()
    {
        $propertyTypes = Property::propertyTypes();
        $propertyPrices = Property::propertyPrices();
        return view('admin.property.create', compact('propertyTypes','propertyPrices'));
    }

    public function store(Request $request)
    {

    $request->validate([
        'image' => 'required',
        // 'order' => 'required',
        'type' => 'required',
    ]);
    // 画像のアップロード
    if ($request->hasFile('image')) {
        $image_path = $request->file('image')->store('images', 'public');
    }

    Property::create([
        'order' => $request->input('order'),
        'type' => $request->input('type'),
        // 'type' => $request->input('type'),
        'image_path' => $image_path ?? null, // 画像パスを保存
        'price' => $request->input('price'),
        'is_new_building' => $request->input('is_new_building'),
        'is_brokerage_free' => $request->input('is_brokerage_free')
    ]);
    return redirect()->route('admin.property.index')->with('info', '完了!');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
     
        // 対象のプロパティを検索
        $property = Property::findOrFail($id);
        // 画像のアップロード
        if ($request->hasFile('image')) {
            if ($property->image_path) {
                Storage::disk('public')->delete($property->image_path);
            }
    
            $image_path = $request->file('image')->store('images', 'public');
            $property->image_path = $image_path;
        }
        $property->order = $request->input('order');
        $property->is_display = $request->input('is_display');
        $property->type = $request->input('type');
        $property->price = $request->input('price');
        $property->is_new_building = $request->input('is_new_building');
        $property->is_brokerage_free = $request->input('is_brokerage_free');
        
        $property->save();
        return redirect()->route('admin.property.index')->with('info', '更新が完了しました!');
    }

    public function destroy($id)
    { 
        $property = Property::find($id);
        if ($property) {
            if ($property->image_path) {
                Storage::disk('public')->delete($property->image_path);
            }
            $property->delete();
            return redirect()->route('admin.property.index')->with('success', '削除');
        }
        return redirect()->route('admin.property.index')->with('error', '見つかりませんでした。');
    }
}