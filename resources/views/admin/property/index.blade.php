@extends('layout.app')

@section('title', '管理')

@section('content')
  <div class="container mx-auto text-center px-8 py-14">
    <h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 mb-4">広告管理</h2>
    <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">新規追加</p>
    <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="number" name="type" placeholder="Bedrooms">
        <input type="number" name="order" placeholder="Bathrooms">
        <button type="submit">新規追加</button>
    </form>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
  </div>
<container>
    <section>
        <div class="product">
            <img  src="{{ asset('messageImage_1717830807757.jpg') }}" alt="Product Image">
            <h2>Product Name 1</h2>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $50</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/300" alt="Product Image">
            <h2>Product Name 2</h2>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $60</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more products here -->
    </section>
</container>
@endsection