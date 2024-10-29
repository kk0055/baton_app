@extends('layout.landing.property')
@section('title', '賃貸物件')

@section('content')
    <div id="archive_header" class="inview" style="margin-top: 50px;">
        <div class="title_area">
            @if (Route::currentRouteName() == 'landing.isBrokerageFree')
                <h2 class="catch large_headline"><span>仲介手数料無料</span></h2>
            @else
                <h2 class="catch large_headline"><span>新着物件</span></h2>
            @endif
            {{-- <p class="sub_title colored"><span></span></p> --}}
        </div>
        {{-- <p class="desc post_content">今週のおススメ物件</p> --}}
    </div>

    <section id="archive_blog" class="inview slide_up_animation">
        {{-- 検索 --}}
        {{-- @if (Route::currentRouteName() !== 'landing.isBrokerageFree')
            <div class="sub_title colored property "
                style="font-size: 95%; color:#000000; padding:10px 0; margin-bottom:30px;">
                <form action="{{ route('landing.rent') }}" method="GET" style="">
                    <select name="price" id="price"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        style="font-weight: bold; background-color:#699999; color: white; padding:10px;margin-right:7px;">
                        @foreach ($propertyPrices as $price)
                            <option value="{{ $price }}" style="font-weight: bold;">
                                {{ $price }}
                            </option>
                        @endforeach
                    </select>
                    <div style="margin-top: 10px; display: flex; align-items: center;">
                        <div style="display:flex; align-items: center; margin-right:4px;">
                            <input type="checkbox" name="is_new_building" id="is_new_building" value="1"
                                style="margin-right:5px;" {{ request()->get('is_new_building') == '1' ? 'checked' : '' }}>
                            <label for="is_new_building" class="block text-gray-700 text-sm font-bold mb-2 mt-4">新築</label>
                        </div>

                        <div style="display:flex; align-items: center; margin-right:4px;">
                            <input type="checkbox" name="is_brokerage_free" id="is_brokerage_free" value="1"
                                style="margin-right:5px;" {{ request()->get('is_brokerage_free') == '1' ? 'checked' : '' }}>
                            <label for="is_brokerage_free"
                                class="block text-gray-700 text-sm font-bold mb-2 mt-4">仲介手数料無料</label>
                        </div>

                        <button type="submit" class="catch property_search" style="padding:3px; margin-left:4px; ">
                            <span class="label" style="font-size: 16px;"><i class="fa fa-search" style="margin-right:4px;"
                                    aria-hidden="true"></i>検索</span>
                        </button>
                    </div>
                </form>
            </div>
        @endif --}}
        {{-- 検索 --}}
        <div class="blog_list">
            @foreach ($rents as $property)
                <div class="item">
                    <a class="image_link image-link animate_background"
                        href="{{ asset('storage/' . $property->image_path) }}">
                        <div class="image_wrap">
                            <img loading="lazy" class="image" src="{{ asset('storage/' . $property->image_path) }}"
                                alt="Property Image" width="770" height="520"
                                style="width: 100%; height: 100%; object-fit: contain;" />
                        </div>
                    </a>
                    {{-- <p style="margin-bottom:10px">価格帯: {{ $property->price }}</p>
                    <p style="margin-bottom:10px">新築: {{ $property->is_new_building ? '✅' : '❌' }} </p>
                    <p style="margin-bottom:10px">仲介手数料無料: {{ $property->is_brokerage_free ? '✅' : '❌' }} </p> --}}
                    {{-- <div class="content">
                    <time class="date entry-date published" datetime="2023-09-28T23:21:04+09:00">2023.09.28</time>
                </div> --}}
                </div>
            @endforeach
        </div>

    </section>
    <!-- 画像をクリックしたときに表示されるモーダル -->
    <div class="modal">
        <span class="close">&times;</span>
        <img class="modal-content">
    </div>
@endsection
