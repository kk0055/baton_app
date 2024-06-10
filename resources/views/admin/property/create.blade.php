@extends('layout.app')

@section('title', '管理')

@section('content')
 <!-- component -->
 <div class="flex justify-center items-center h-screen">
  <div class="w-full max-w-xs container">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
        画像
      </label>
      <input type="file" name="image" class="mb-4" >
      <label class="block text-gray-700 text-sm font-bold mb-4" for="order">
        順番
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="order" type="number" >
    </div>
    {{-- <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
        タイプ
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="type" type="type" >
    </div> --}}
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        新規追加
      </button>
      <button class="bg-gray-400 text-black font-bold py-2 px-4 rounded  focus:shadow-outline">
       <a href="{{ route('admin.property.index') }}">キャンセル</a>
      </button>
    </div>
  </form>
</div>
</div>
@endsection