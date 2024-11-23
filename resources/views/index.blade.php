@extends('layout.landing.app')

@section('canonical', 'https://xbatonx.com/')

@section('styles')
    <style id="current-page-style" type="text/css">
        .highlight-box {
            background-color: #507878;
            color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            width: 600px;
            max-width: 100%;
        }

        #site_loader_overlay {
            position: relative;
            overflow: hidden;
            pointer-events: none;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            height: 100vh;
            height: 100dvh;
            z-index: 99999999999;
            opacity: 1;
            background-color: #EF3D08;
            background: url('/logo.jpg') no-repeat center center;
            /* Set your image path */
            background-size: cover;
        }

        /* body.end_loading #site_loader_overlay { opacity:0; transition: opacity 0.7s ease 0.7s; } */

        #site_loader_overlay_for_catchphrase {
            position: relative;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            width: 100%;
            height: 100vh;
            height: 100dvh;
            z-index: 99998;
            background: #000000;
        }

        #site_loader_overlay_for_catchphrase.active {
            opacity: 0;
            transition: opacity 0.1s ease 1.5s;
        }

        #site_loader_overlay {
            transform: translate3d(0, -100%, 0);
            transition: transform 0.7s cubic-bezier(.83, 0, .17, 1) 0.5s;
        }

        #site_loader_overlay.active {
            transform: translate3d(0, 0%, 0);
        }

        body.end_loading #site_loader_overlay {
            opacity: 0;
            transition: opacity 0.5s ease 0.4s;
        }

        #loader_catch {
            opacity: 0;
            text-align: center;
            line-height: 1.8;
            padding: 0 100px;
            font-size: 26px;
            color: #ffffff;
        }

        #site_loader_overlay_for_catchphrase.start_loading #loader_catch {
            opacity: 1;
            transition: opacity 1.0s ease 0.5s;
        }

        @media screen and (max-width:1100px) {
            #loader_catch {
                font-size: 22px;
                padding: 0 60px;
            }
        }

        @media screen and (max-width:800px) {
            #loader_catch {
                font-size: 18px;
                padding: 0 20px;
            }
        }

        #loader_logo_image {
            opacity: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        #site_loader_overlay.active #loader_logo_image {
            opacity: 1;
            transition: opacity 1.0s ease 1.5s;
        }

        #loader_logo_image .mobile {
            display: none;
        }

        @media screen and (max-width:800px) {
            #loader_logo_image .pc {
                display: none;
            }

            #loader_logo_image .mobile {
                display: block;
            }
        }

        .main_logo_image_content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* 親要素の高さを設定 */
        }


        .philosophy2_message {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .philosophy_submessage {
            font-size: 1.7rem;
            font-weight: bold;
        }

        /* スマホ用スタイル */
        @media (max-width: 768px) {

            .title_area {
                width: 100%;
                text-align: center;
            }

            .divider {
                width: 100%;
                height: 1px;
                margin: 20px 0;
                background-color: grey;
                display: none;
            }

            .philosophy_container {
                flex-direction: column;
            }

            .good_point {
                text-align: left;
            }

            .philosophy1 {
                text-align: left;
                font-weight: bold;
            }

            .philosophy2 {
                text-align: left;
                font-weight: bold;
            }

            .property {
                text-align: left;
            }

            .property_sub_titile {
                position: relative;
                display: flex;
                align-items: center;
            }

            .property_sub_titile::after {
                content: '';
                flex-grow: 1;
                height: 1px;
                background-color: grey;
                margin-left: 10px;

            }

            .break::before {
                content: "\A";
                white-space: pre;

            }

            .philosophy_for_pc {
                display: none
            }

            .header-container {
                display: none
            }

            .property-text {
                font-size: 14px;
                line-height: 2;
                margin-bottom: 12px;
                text-align: left;
                word-break: break-word;
            }

            .top_message {
                font-size: 22px
            }
        }

        /* Laptop用スタイル */
        @media screen and (min-width:770px) {
            .divider {
                width: 1px;
                height: 330px;
                background-color: grey;
                margin: 0 20px;
                display: none;
            }

            .philosophy_container {
                display: flex;
                justify-content: center;
                align-items: flex-start
            }

            .philosophy1 {
                flex: 1;
            }

            .philosophy2 {
                margin-left: 60px;
                flex: 1;
            }

            .philosophy_for_sp {
                display: none
            }

            .top_message {
                font-size: 34px
            }
        }

        .property-text {
            font-size: 18px;
            color: #000000;
            margin-bottom: 9px;

        }

        .top_message {
            display: none;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }
    </style>
@endsection



@section('bodyClass',
    'home page-template-default page page-id-4549 wp-embed-responsive megamenu_dark_color
    header_slider_layout_type1 use_loading_screen loading_animation_type1 hide_sidebar normal_content_width')

@section('content')
    <div id="js-body-start"></div>

    <div id="site_loader_overlay">
        <div id="loader_logo_image">
            {{-- <h1 class="pc" width="196" height="26" >株式会社BATON</h1> --}}
            {{-- <img class="pc" src="baton_big_logo.jpg" alt="" title="" width="196" />
            <img class="mobile" src="baton_big_logo.jpg" alt="" title="" width="155"
                height="120" /> --}}
        </div>
    </div>

    @include('landing.components.landing_page_header')

    <div id="container">
        <div id="header_slider_wrap" class="layout_type1">
            <div id="header_slider_content">
                <div class="content main_logo_image_content">
                    {{-- <img class="image" src="baton_logo240819.svg" width="80%" height="80%"
                        style="display:none;" /> --}}
                    <div class="top_message" style="">
                        <h1>誠実であり続けることへ努力する</h1><br>
                        <h1>常に最善を考え、そして実行する</h1><br>
                        <h1>100年後の笑顔を創る</h1>
                    </div>
                </div>
            </div>
            <div id="header_slider" class="swiper slide_type_slide_up  effect_type_zoom_out" data-fade_speed="1000"
                height="600">
                <div class="swiper-wrapper">
                    <div class="swiper-slide item item first_item " data-item-type="type2">
                        <div class="item-inner video_container">
                            {{-- <div class="overlay" style="background:rgba(0,60,130,0.2);"></div> --}}
                            <video class="bg_video" playsinline muted>
                                <source media="(max-width: 991px)" src="large_video5.mp4" alt="video" type="video/mp4">
                                <source src="NoSky3.mp4" alt="video" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content_builder">
            {{-- 業務内容 --}}
            <section class="cb_free_space num1 " id="cb_content_1">
                <div class="post_content clearfix" id="job_details">
                    <div class="design_header inview">
                        <div class="title_area">
                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 業務内容</h3>
                        </div>
                        <div class="post_col post_col-2">
                            <p>株式会社BATONは世田谷区を中心として、お部屋のご紹介をメインとして活動させていただいております。地域密着型でありながら、上京される方々にとっても安心して任せていただけるような、アットホームで温かみのあるサービスを心掛けております。<br>
                            </p>
                            <h3 class="">BATONの強み</h3>
                            <div class="t">
                                <strong style="font-size: 22px">1.圧倒的な初期費用の安さ</strong> <br>
                                &nbsp; 家賃、広告などの高額なコストを徹底的に抑えることで、圧倒的な初期費用の安さでのご提案を実現しております。多くの不動産会社では、「仲介手数料無料」を謳いながらも、別の名目で費用が上乗せされるケースが見られます。
                                株式会社BATONでは、初期費用のご負担を可能な限り抑え、透明性の高い取引を心がけています。<br>


                                <strong style="font-size: 22px">2.豊富な取り扱い物件数</strong><br>
                                &nbsp;
                                大手不動産会社と同じデータベースを使用しており、全国各地の物件を同規模でご紹介できます。世田谷区を中心としてはおりますが、都内を中心に首都圏どこでもご紹介可能です。豊富な選択肢の中からお客様に最適な物件をご提案します。<br>

                                <strong style="font-size: 22px">3.WEB内覧</strong><br>
                                &nbsp;お忙しい方や遠方のお客様には、ご希望に応じてWEBでの内覧もご案内しております。<br>

                                <strong style="font-size: 22px">4.ライフライン一括申請</strong><br>
                                &nbsp;電気・ガス・水道などの窓口を一本化し、ライフラインの手続きを効率的にサポートいたします。面倒な手続きをまとめて対応いたしますので、安心してお任せください。<br>

                                <strong style="font-size: 22px">5.24時間サポート</strong><br>
                                &nbsp;お客様のご要望に応じて、鍵の紛失やライフラインのトラブルにも対応する24時間サポートをご提供しております。※24時間サポートは有料となります。<br><br>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cb_design_content num4" id="cb_content_4">
                <div class="design_header cb_design_header inview">
                    <div class="title_area">
                        <h3 class="catch rich_font good_point">| 世田谷の魅力</h3>
                    </div>
                    <div class="desc post_content">
                        <strong style="font-size: 22px">1.交通アクセス</strong> <br>
                        &nbsp; 小田急線、京王線、田園都市線など都心へのアクセスが非常に便利です。<br>


                        <strong style="font-size: 22px">2.生活環境が充実</strong><br>
                        &nbsp; 私は世田谷の経堂（キョウドウ）に在住しておりますが、経堂駅の周辺で3つの商店街があります。そしてどの商店街も活動が活発で非常に魅力的です。<br>

                        <strong style="font-size: 22px">3.小中高、大学など教育環境が整っている</strong><br>
                        &nbsp;世田谷区にキャンパスを設置している大学は下記の通りです。<br>
                        東京農業大学、成城大学、日本大学、国士舘大学、駒沢大学、産業能率大学、昭和女子大学、多摩美術大学、東京医療保健大学、東京都市大学、日本体育大学、日本女子体育大学<br>

                        <strong style="font-size: 22px">4.自然が豊か</strong><br>
                        &nbsp;砧公園、駒沢オリンピック公園、世田谷公園など都心とは思えない自然環境が整っております。<br><br>

                        {{-- <div class="highlight-box" style="">
                            他にも食事の美味しいお店、閑静な住宅街、人が温かくとても親身であるなど、他にも経堂地区の良さは沢山あります。経堂地区の良さを共有させていただき、楽しむ物件探しをサポートさせて頂ければ幸いでございます。<br>
                        </div> --}}
                    </div>

                </div>

                <div class="item_list shutter_image inview col2 link_ver vertical">
                    <div class="item">
                        {{-- <div class="overlay"
                      style="background: linear-gradient(to bottom, rgba(14,86,0,1) 0%,rgba(14,86,0,0) 100%);">
                  </div> --}}
                        <div class="post_list">
                        </div>
                        <img loading="lazy" class="image" src="kyodo1.jpg" width="750" height="540" />
                    </div>
                    <div class="item">
                        {{-- <div class="overlay"
                      style="background: linear-gradient(to bottom, rgba(0,59,112,1) 0%,rgba(0,59,112,0) 100%);">
                  </div> --}}
                        <div class="post_list">
                        </div>
                        <img loading="lazy" class="image" src="kyodo2.jpg" width="750" height="540" />
                    </div>
                </div>
                <div class="design_arrow_button cb_design_arrow_button">
                </div>
            </section>
            {{-- 新着物件 --}}
            <section class="cb_blog_list num5" id="cb_content_5">
                <div class="design_header cb_design_header inview ">
                    <div class="title_area no_desc">
                        <h3 class="catch rich_font inview slide_up_animation property" style="margin-bottom: 20px;">|
                            新着物件</h3>
                        {{-- <p class="sub_title colored property property_sub_titile"
                            style="font-size: 22px; color:#000000 ; margin-top:15px; margin-bottom: 20px;">
                            今週のオススメ物件
                        </p> --}}
                        <div class=" inview slide_up_animation" style="line-height:2;">
                        <p class="property-text" style="margin-bottom: 5px;">
                            大手不動産会社と同じデータベースを使用しておりますので、他社サイトで見つけた物件もご紹介が可能です。
                        </p>
                        <p class="property-text" style="margin-bottom: 5px;">
                            世田谷区を中心としてはおりますが、都内を中心に首都圏どこでもご紹介可能です。
                        </p>
                        <p class="property-text" style="margin-bottom: 5px;">
                            当サイトに掲載している物件は、取り扱い物件のほんの一部です。
                        </p>
                        <p class="property-text">
                            もっと多くの選択肢から物件をご紹介できますので、気になる条件があればお気軽にお問い合わせください！
                        </p>
                    </div>
                        {{-- <div class="sub_title colored property "
                            style="font-size: 95%; color:#000000; padding:10px 0">
                            <form action="{{ route('landing.rent') }}" method="GET" style="">
                                <div class="" style="display: flex;">
                                    <select name="price" id="price"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        style="font-weight: bold; background-color:#699999; color: white; padding:10px;margin-right:7px;">
                                        @foreach ($propertyPrices as $price)
                                            <option value="{{ $price }}" style="font-weight: bold;">
                                                {{ $price }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <button type="submit" class="property_search"
                                        style="padding:3px; margin-left:4px; ">
                                        <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                                style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                                    </button>
                                </div>
                                <div style="margin-top: 10px; display: flex; align-items: center;">
                                    <div style="display:flex; align-items: center; margin-right:4px;">
                                        <input type="checkbox" name="is_new_building" id="is_new_building"
                                            value="1" style="margin-right:5px;"
                                            {{ request()->get('is_new_building') == '1' ? 'checked' : '' }}>
                                        <label for="is_new_building"
                                            class="block text-gray-700 text-sm font-bold mb-2 mt-4">新築</label>
                                    </div>

                                    <div style="display:flex; align-items: center; margin-right:4px;">
                                        <input type="checkbox" name="is_brokerage_free" id="is_brokerage_free"
                                            value="1" style="margin-right:5px;"
                                            {{ request()->get('is_brokerage_free') == '1' ? 'checked' : '' }}>
                                        <label for="is_brokerage_free"
                                            class="block text-gray-700 text-sm font-bold mb-2 mt-4">仲介手数料無料</label>
                                    </div>
                                    <button type="submit" class="catch property_search"
                                        style="padding:3px; margin-left:4px; ">
                                        <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                                style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                                    </button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <div class="main_content inview">
                    <div class="blog_carousel_wrap swiper">
                        <div class="blog_carousel swiper-wrapper">
                            @foreach ($rents as $property)
                                <div class="item swiper-slide">
                                    <div class="image_wrap image_link image-link animate_background">
                                        <img class=" property-image" src="{{ asset('storage/' . $property->image_path) }}"
                                            alt="Property Image" style="width: 100%; height: 100%; object-fit: contain;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="genesis_carousel_scrollbar">
                        <div class="blog_carousel_scrollbar swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="design_arrow_button cb_design_arrow_button">
                    <a href="{{ route('landing.rent') }}">
                        <span class="label"
                            style="font-size: 24px; color: #ffffff; background-color: #507878; padding: 10px 20px; border-radius: 5px;">新着物件一覧<i class="fa-solid fa-arrow-right" style="margin-left:5px;" ></i>
                        </span></a>
                </div>
            </section>
            {{-- 仲介手数料無料 --}}
            {{-- <section class="cb_blog_list num5" id="cb_content_5">
                <div class="design_header cb_design_header inview ">
                    <div class="title_area no_desc">
                        <h3 class="catch rich_font inview slide_up_animation property" style="margin-bottom: 20px;">|
                            仲介手数料無料</h3>
                        <div class="sub_title colored property "
                            style="font-size: 95%; color:#000000; padding:10px 0">
                            <form action="{{ route('landing.rent') }}" method="GET" style="">
                                <select name="price" id="price"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($propertyPrices as $price)
                                        <option value="{{ $price }}">
                                            {{ $price }}
                                        </option>
                                    @endforeach
                                </select>
                                <div style="margin-top: 10px; display: flex; align-items: center;">
                                    <div style="display:flex; align-items: center; margin-right:4px;">
                                        <input type="checkbox" name="is_new_building" id="is_new_building"
                                            value="1" style="margin-right:5px;"
                                            {{ request()->get('is_new_building') == '1' ? 'checked' : '' }}>
                                        <label for="is_new_building"
                                            class="block text-gray-700 text-sm font-bold mb-2 mt-4">新築</label>
                                    </div>
                                    <div style="display:flex; align-items: center; margin-right:4px;">
                                        <input type="checkbox" name="is_brokerage_free" id="is_brokerage_free"
                                            value="1" style="margin-right:5px;"
                                            {{ request()->get('is_brokerage_free') == '1' ? 'checked' : '' }}>
                                        <label for="is_brokerage_free"
                                            class="block text-gray-700 text-sm font-bold mb-2 mt-4">仲介手数料無料</label>
                                    </div>
                                    <button type="submit" class="catch property_search"
                                        style="padding:3px; margin-left:4px; ">
                                        <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                                style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main_content inview">
                    <div class="blog_carousel_wrap swiper">
                        <div class="blog_carousel swiper-wrapper">
                            @foreach ($is_brokerage_free as $property)
                                <div class="item swiper-slide">
                                    <div class="image_wrap image_link image-link animate_background">
                                        <img class=" property-image"
                                            src="{{ asset('storage/' . $property->image_path) }}"
                                            alt="Property Image"
                                            style="width: 100%; height: 100%; object-fit: contain;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="genesis_carousel_scrollbar">
                        <div class="blog_carousel_scrollbar swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="design_arrow_button cb_design_arrow_button">
                    <a href="{{ route('landing.isBrokerageFree') }}"><span class="label"
                            style="font-size: 16px; color:#000000">仲介手数料無料物件一覧</span><i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </section> --}}
            <!-- 売買物件 -->
            {{-- <section class="cb_blog_list num5" id="cb_content_2">
                <div class="design_header cb_design_header inview">
                    <div class="title_area no_desc property">
                        <h3 class="catch rich_font inview slide_up_animation property">| 売買物件</h3>
                        <p class="sub_title colored property property_sub_titile"
                            style="font-size: 22px; color:#000000 ; margin-top:15px; margin-bottom: 20px;">
                            今週のオススメ物件
                        </p>
                    </div>
                </div>
                <div class="main_content inview">
                    <div class="blog_carousel_wrap blog2_carousel_wrap swiper">
                        <div class="blog2_carousel blog_carousel swiper-wrapper">
                            @foreach ($sales as $property)
                                <div class="item swiper-slide">
                                    <a class="image_link image animate_background"
                                      href="{{ asset('storage/' . $property->image_path) }}">
                                    <div class="image_wrap image_link image animate_background">
                                        <img class="property-image"
                                            src="{{ asset('storage/' . $property->image_path) }}" alt="Property Image"
                                            style="width: 100%; height: 100%; object-fit: contain;">
                                    </div>
                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- 画像をクリックしたときに表示されるモーダル -->
                    <div class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content">
                  </div>
                    <div class="genesis_carousel_scrollbar">
                        <div class="blog2_carousel_scrollbar swiper-scrollbar"></div>
                    </div>

                </div>

                <div class="design_arrow_button cb_design_arrow_button">
                    <a href="{{ route('landing.sale') }}"><span class="label"
                            style="font-size: 16px; color:#000000">売買物件一覧</span><i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </section> --}}
            <!-- END 売買物件 -->

            {{-- ブログ --}}
            {{-- @if ($latestPost)
                <section class="cb_free_space num1 " id="cb_content_1">
                    <div class="post_content clearfix">
                        <div class="design_header inview">
                            <div class="title_area">
                            </div>
                        </div>
                        <div class="post_row inview slide_up_animation">
                            <div class="post_col post_col-2 rich_font">
                                <h3 class="catch rich_font">| {{ $latestPost->title }}
                                </h3>
                            </div>
                            <div class="post_col post_col-2">
                                <p>{!! $latestPost->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif --}}

            {{-- 企業理念 --}}
            {{-- <section class="cb_design_content num4" id="cb_content_4">
                <div class="design_header cb_design_header inview philosophy_container">
                    <div class="title_area philosophy1">
                        <h3 class="catch rich_font inview slide_up_animation">| 企業理念
                        </h3>
                        <div class="post_row">
                            <div class="post_col post_col-2 inview slide_up_animation" style="margin-top:10px;">
                                <p class="philosophy_submessage philosophy_for_pc">100年後の笑顔を創る
                                </p>
                                <p class="philosophy_submessage philosophy_for_sp" style="font-size: 50px;">
                                    100年後の笑顔を創る
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="title_area philosophy2">
                        <h3 class="catch rich_font inview slide_up_animation">| 経営理念
                        </h3>
                        <div class="post_row">
                            <div class="post_col post_col-2 inview slide_up_animation"
                                style="margin-top:10px;">
                                <p>誠実にあり続けることへの努力を怠らず、
                                    多くの社会問題に対して、今やるべきことを考え行動し、
                                    100年後の笑顔を創る会社となる。</p>
                                <p class="philosophy2_message"> 三方よし＝ <span
                                        class="philosophy_submessage break">従業員の笑顔、お客様の笑顔、社会を笑顔へ</span>
                                </p>
                            </div>
                            <div class="post_col post_col-2 inview slide_up_animation philosophy_for_sp"
                                style="margin-top:10px;">
                                <div class="philosophy2_message">
                                    <p class="philosophy_submessage">三方よし＝</br></p>
                                    <p style="font-size: 50px;">従業員の笑顔</br></p>
                                    <p style="font-size: 50px;">お客様の笑顔</br></p>
                                    <p style="font-size: 50px;">社会を笑顔へ </br></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="cb_free_space num1 " id="cb_content_1">
                <div class="post_content clearfix" id="job_details">
                    <div class="design_header inview">
                        <div class="title_area">
                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 経営理念
                            </h3>
                        </div>
                        <div class="post_col post_col-2">
                            <p>誠実にあり続けることへの努力を怠らず、
                                多くの社会問題に対して、今やるべきことを考え行動し、
                                100年後の笑顔を創る会社となる。<br>
                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- 不動産仲介業の使命 --}}
            {{-- <section class="cb_free_space num1 " id="cb_content_1">

                <div class="post_content clearfix">
                    <div class="design_header inview">
                        <div class="title_area">
                            <h3 class="large_headline"><span>不動産仲介業の使命</span></h3>

                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 不動産仲介業の使命とは
                            </h3>
                            <p style="font-size: 22px; color:#000000"><span>物件選びはエンターテイメントである</span></p>
                        </div>
                        <div class="post_col post_col-2">
                            <p>株式会社BATONは、物件選びもエンターテイメントのように楽しんでいただきたいと考えております。
                                <br>
                                楽しんでいただく為、大切なのは「環境づくり」です。不動産業界は未だに「恐そう」とか「騙されそう」とういうイメージをお持ちの方も多いかと思います。<br>ここを払拭すべくコミュニケーションの取りやすい環境づくり、「笑顔」で「クリーン」な会社をモットーとして、お客様からの要望が出やすい環境づくりを徹底しております。<br>期待や不安・・・様々な想いを馳せつつも、とにかく物件選びを楽しむこと。それこそが、皆様が理想の物件に巡り合う一番の近道となります。<br>ご自身が主役となり楽しく物件を選んでいただくことを使命とし、株式会社BATONは皆様をしっかりとサポートさせていただきます!<br>

                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- 設立の目的 --}}
            {{-- <section class="cb_free_space num1 " id="cb_content_1">
                <div class="post_content clearfix" id="about_us">
                    <div class="design_header inview">
                        <div class="title_area">
                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 設立の目的 </h3>
                        </div>
                        <div class="post_col post_col-2">
                            <p>株式会社BATONを設立した目的は企業理念の通り「100年後の笑顔を創る」ことです。<br>
                                昨今の社会情勢は「地球温暖化」「社会情勢の変化」「超高齢化社会」など将来へ向け多くの懸念材料が存在しております。<br>そのような現状を踏まえ大切なことは、次世代が希望を持てる将来へ向け、私たち一人一人にできること、やるべきことを常に考え、そして一つずつでも行動することだと考えております。<br>
                                社名の由来は希望に満ちた輝かしい未来へ繋ぐ「BATON」となること。出来ることには限りがあるかもしれませんが、この想いを胸に日々の業務に全力で取り組んで参ります。
                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}

        </div>

        @include('landing.components.footer')


    </div><!-- #container -->

    {{-- <div id="return_top">
        <a class="no_auto_scroll" href="#body">
         </a>
    </div> --}}

    @include('landing.components.landing_page_mobile_header')
@endsection

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?ver=10.2.0"
        id="swiper-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jquery.easing.1.4.js?ver=1.0"
        id="jquery.easing.1.4-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jquery.cookie.min.js?ver=1.0"
        id="jquery.cookie.min-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/assets/js/prism.js?ver=2.0.1"
        id="hcb-prism-js"></script>
    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/clipboard.min.js?ver=2.0.11"
        id="clipboard-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/header-slider.js?ver=1.0"
        id="header-slider-js"></script>

    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jscript.js?ver=1.0" id="jscript-js">
    </script>

    <script type="text/javascript" id="hcb-script-js-extra"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/build/js/hcb_script.js?ver=2.0.1"
        id="hcb-script-js"></script>
    <script>
        (function($) {})(jQuery);
        (function($) {

            if ($('.blog_carousel_wrap').length) {
                let blog_carousel5 = new Swiper("#cb_content_5 .blog_carousel_wrap", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    grabCursor: true,
                    scrollbar: {
                        el: "#cb_content_5 .blog_carousel_scrollbar",
                        hide: false,
                        draggable: true,
                        dragSize: 120,
                    },
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                    breakpoints: {
                        800: {
                            scrollbar: {
                                dragSize: 200,
                            },
                        }
                    }
                });
            };
            if ($('.blog2_carousel_wrap').length) {
                let blog_carousel5 = new Swiper("#cb_content_2 .blog2_carousel_wrap", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    grabCursor: true,
                    scrollbar: {
                        el: "#cb_content_2 .blog2_carousel_scrollbar",
                        hide: false,
                        draggable: true,
                        dragSize: 120,
                    },
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                    breakpoints: {
                        800: {
                            scrollbar: {
                                dragSize: 200,
                            },
                        }
                    }
                });
            };

            if ($('.cb_service_category_list_carousel').length) {
                let cb_service_category_list_carousel = new Swiper(".cb_service_category_list_carousel", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    resistanceRatio: 0,
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                    navigation: {
                        nextEl: ".cb_service_category_list_button_next",
                        prevEl: ".cb_service_category_list_button_prev",
                    },
                });
            };

            $(window).on('load resize', function() {
                image_height = $('.cb_service_category_list_carousel .item').height();
                $('.cb_service_category_list_button_prev, .cb_service_category_list_button_next').css('top',
                    image_height / 2);
            });

        })(jQuery);

        (function($) {

            if ($('#footer_nav').length) {
                let footer_nav = new Swiper("#footer_nav", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    grabCursor: true,
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                });
            };

        })(jQuery);


        function after_load() {
            (function($) {

                $('body').addClass('end_loading');

                setTimeout(function() {
                    $('html').addClass('end_loading_show_scroll_bar');
                }, 100);

                setTimeout(function() {
                    (function($) {

                        const targets = document.querySelectorAll('.inview');
                        const options = {
                            root: null,
                            rootMargin: '-100px 0px',
                            threshold: 0
                        };
                        const observer = new IntersectionObserver(intersect, options);
                        targets.forEach(target => {
                            observer.observe(target);
                        });

                        function intersect(entries) {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    $(entry.target).addClass('animate');
                                    $(".item", entry.target).each(function(i) {
                                        $(this).delay(i * 300).queue(function(next) {
                                            $(this).addClass('animate');
                                            next();
                                        });
                                    });
                                    observer.unobserve(entry.target);
                                }
                            });
                        }
                    })(jQuery);

                    // #header_messageが存在する場合のみ処理を実行
                    if ($('#header_message').length) {
                        const headerMessageHeight = jQuery('#header_message').outerHeight();
                        // スクロール位置によって#headerのpositionとtopのスタイルを動的に変更
                        $(window).on('scroll', function() {
                            const scrollPosition = jQuery(this).scrollTop();
                            if (scrollPosition < headerMessageHeight) {
                                $('#header').css({
                                    'position': 'relative',
                                    'top': '0px'
                                });
                            } else {
                                $('#header').css({
                                    'position': 'fixed',
                                    'top': '0px'
                                });
                            }
                        });
                    }

                    setTimeout(function() {
                        $('#header').removeClass('first_animate');
                    }, 300);
                }, 1200);

                setTimeout(function() {
                    $('#header_slider_wrap').addClass('start_slide');
                }, 900);
                window.dispatchEvent(new Event('initHeaderSlider'));
                // 画像の表示を設定
                $('.image').css('display', 'block');
                $('.divider').css('display', 'block');
                $('.top_message').css('display', 'block');
            })(jQuery);
        }
        (function($) {
            $('#site_loader_overlay').addClass('start_loading');
            $('#site_loader_overlay_for_catchphrase').addClass('start_loading');

            setTimeout(function() {
                $('#site_loader_overlay_for_catchphrase').addClass('active');
                $('#site_loader_overlay').addClass('active');
            }, 500);
            setTimeout(function() {
                after_load();
            }, 2500);
        })(jQuery);

        // 画像リンクをクリックしたときにモーダルを表示
        // const imageLinks = document.querySelectorAll('.image-link');
        // const modal = document.querySelector('.modal');
        // const modalContent = modal.querySelector('.modal-content');
        // const closeModal = modal.querySelector('.close');
        // const scrollBar = document.querySelector('.genesis_carousel_scrollbar');
        // const header = document.querySelector('#header');

        // imageLinks.forEach(function(link) {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         modalContent.src = this.href;
        //         modal.style.display = 'block';
        //         scrollBar.style.display = 'none';
        //         header.style.display = 'none';
        //     });
        // });

        // // モーダルの閉じるボタンがクリックされたとき、モーダルを非表示にする
        // closeModal.addEventListener('click', function() {
        //     modal.style.display = 'none';
        //     header.style.display = 'block';
        //     scrollBar.style.display = 'block';
        // });
        // // モーダルの背景がクリックされたとき、モーダルを非表示にする
        // window.addEventListener('click', function(event) {
        //     if (event.target === modal) {
        //         modal.style.display = 'none';
        //         header.style.display = 'block';
        //         scrollBar.style.display = 'block';
        //     }
        // });
    </script>
@endsection
