<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\RailwayLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $properties = Property::orderBy('created_at', 'desc')->with('railwayLines')->get();
        $railwayLines = RailwayLine::get();
        return view('admin.property.index', compact('properties', 'railwayLines'));
    }

    public function create()
    {
        $railwayLines = RailwayLine::get();
        return view('admin.property.create', compact('railwayLines'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
            // 'order' => 'required',
            // 'type' => 'required',
        ]);
        // 画像のアップロード
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('images', 'public');
        }

        $property = Property::create([
            'image_path' => $image_path ?? null, // 画像パスを保存
            // 'order' => $request->input('order'),
            // 'type' => $request->input('type'),
            // 'price' => $request->input('price'),
            // 'is_new_building' => $request->input('is_new_building'),
            // 'is_brokerage_free' => $request->input('is_brokerage_free')
        ]);

        $railway_lines = $request->input('railway_line');

        // 中間テーブルに保存
        if ($railway_lines) {
            $property->railwayLines()->sync($railway_lines); // 中間テーブルに路線情報を保存
        }
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
        }else {
            // 画像がアップロードされていない場合、既存の画像を使用
            $image_path = $property->image_path;
        }
        

        $data = $request->except('image','railway_line'); 
        $data['image_path'] = $image_path;
  
        $property->update($data);
        
        $railway_lines = $request->input('railway_line');

        if ($railway_lines) {
            $property->railwayLines()->sync($railway_lines); 
        }

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