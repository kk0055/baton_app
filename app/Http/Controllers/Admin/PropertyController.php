<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('admin.property.index', compact('properties'));
    }

    public function create()
    {
        return view('admin.property.create');
    }

    public function store(Request $request)
    {

    $request->validate([
        'image' => 'required',
    ]);
    // 画像のアップロード
    if ($request->hasFile('image')) {
        $image_path = $request->file('image')->store('images', 'public');
    }

    Property::create([
        'order' => $request->input('order'),
        // 'type' => $request->input('type'),
        'image_path' => $image_path ?? null, // 画像パスを保存
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

    }

    public function destroy($id)
    {

    }
}