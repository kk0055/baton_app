@extends('layout.landing.property')
@section('title', '賃貸物件')

@section('content')
    <div id="archive_header" class="inview" style="margin-top: 50px;">
        <div class="title_area">
            <h2 class="catch large_headline"><span>賃貸物件</span></h2>
            {{-- <p class="sub_title colored"><span></span></p> --}}
        </div>
        {{-- <p class="desc post_content">今週のおススメ物件</p> --}}
    </div>

    <section id="archive_blog" class="inview slide_up_animation">
        <div class="blog_list">
            @foreach ($rents as $property)
                <div class="item">
                    <a class="image_link image-link animate_background"
                        href="{{ asset('storage/' . $property->image_path) }}">
                        <div class="image_wrap">
                            <img loading="lazy" class="image" src="{{ asset('storage/' . $property->image_path) }}"
                                alt="Property Image" width="770" height="520" />
                        </div>
                    </a>
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