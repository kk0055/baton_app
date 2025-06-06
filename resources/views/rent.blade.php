@extends('layout.landing.app')

@section('title', '新着物件 | 株式会社BATON 世田谷区の賃貸(賃貸マンション・アパート)物件情報 | 人気物件紹介＆初期費用自信有り')
@section('description',
    '世田谷エリアの最新賃貸物件情報をチェック！小田急線、田園都市線、世田谷線、東横線、京王線沿線の新着物件をご紹介。初期費用を抑えたお得な物件を掲載中。世田谷区を中心としてはおりますが、都内を中心に首都圏どこでもご紹介可能です。
    もっと多くの選択肢から物件をご紹介できますので、気になる条件があればお気軽にお問い合わせください！')
@section('canonical', 'https://xbatonx.com/rent')
@section('styles')
    <style>
        .railway-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: flex-start;
        }

        .railway-option {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .search-button {
            margin-left: 4px
        }

        .railway-title {
            margin-top: 40px;
            margin-bottom: 15px;
            color: #507878;
            font-weight: bold;
            font-size: 1.5em;
        }

        .no-property {
            margin-top: 40px;
        }

        /* スマホ用のスタイル（横幅 768px 以下の端末に適用） */
        @media screen and (max-width: 768px) {
            .search-button {}
        }
    </style>
@endsection
@section('bodyClass', 'blog wp-embed-responsive megamenu_dark_color')
@section('content')
    <div id="js-body-start"></div>

    @include('landing.components.landing_page_header')

    <div id="archive_header" class="inview" style="margin-top: 50px;">
        <div class="title_area ">
            <h4 style="font-size: 40px; margin-bottom:20px;" class="colored catch ">新着物件</h4>
            {{-- <p class="sub_title colored"><span></span></p> --}}
        </div>
        <div class=" inview slide_up_animation" style="line-height:2;">
            <p class="" style="margin-bottom: 5px;">
                大手不動産会社と同じデータベースを使用しておりますので、他社サイトで見つけた物件もご紹介が可能です。
            </p>
            <p class="" style="margin-bottom: 5px;">
                世田谷区を中心としてはおりますが、都内および首都圏の賃貸物件を幅広くご紹介可能です。
            </p>
            <p class="" style="margin-bottom: 5px;">
                当サイトに掲載している物件は、取り扱い物件のほんの一部です。
            </p>
            <p class="">
                もっと多くの選択肢から物件をご紹介できますので、気になる条件があればお気軽にお問い合わせください！
            </p>
        </div>
        {{-- <p class="desc post_content">今週のおススメ物件</p> --}}
    </div>

    <section id="archive_blog" class="slide_up_animation">
        {{-- 検索 --}}
        <div class="sub_title colored property " style="font-size: 95%; color:#000000; padding:10px 0; margin-bottom:30px;">
            <form id="search-form" method="POST">
                @csrf
                <div style="margin-top: 10px; display: flex; align-items: center; margin-right: 8px; font-size: 1.1em;">
                    <div class="railway-options">
                        @foreach ($railwayLines as $railway)
                            <div class="railway-option">
                                <input id="railway-{{ $railway->id }}" type="checkbox" name="railways[]"
                                    style="margin-right:5px; width: 20px; height: 20px" value="{{ $railway->id }}">
                                <label for="railway-{{ $railway->id }}"
                                    class="block text-gray-700 text-sm font-bold mb-2 mt-4"
                                    style="cursor: pointer; ">{{ $railway->name }}</label>
                            </div>
                        @endforeach
                        <div class="search-button">
                            <button type="button" class=" catch property_search" style="padding: 6px;" id="search-button">
                                <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                        style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                            </button>
                        </div>
                    </div>
                    {{-- <select name="price" id="price"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        style="font-weight: bold; background-color:#699999; color: white; padding:10px;margin-right:7px;">
                        @foreach ($propertyPrices as $price)
                            <option value="{{ $price }}" style="font-weight: bold;">
                                {{ $price }}
                            </option>
                        @endforeach
                    </select>
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
                    </button> --}}
                </div>
            </form>
        </div>
        {{-- 検索 --}}
        <div class="blog_list" id="default_rent">
            @foreach ($rent as $property)
                <div class="item">
                    <a class="image_link image-link animate_background"
                        href="{{ asset('storage/' . $property->image_path) }}">
                        <div class="image_wrap">
                            @php
                                $firstLine = $property->railwayLines->first();
                                $altText = $firstLine ? $firstLine->name . ' 賃貸物件' : '世田谷の賃貸物件';
                            @endphp
                            <img loading="lazy" class="image" src="{{ asset('storage/' . $property->image_path) }}"
                                alt="{{ $altText }}" width="770" height="520"
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

        {{-- <div id="loading" style="display: none;">
            <img src="/loading.gif" alt="">>
        </div> --}}
        <div id="result-container">
            <!-- 路線ごとの結果がここに表示される -->
        </div>

        {{-- 路線ごとの表示 --}}
        {{-- @foreach ($result as $railwayName => $properties)
            <h1 class="railway-title">{{ $railwayName }}</h1>
            @if ($properties->isEmpty())
                <p class="no-property">該当する物件はありません。</p>
            @else
                <div class="blog_list">
                    @foreach ($properties as $property)
                        <div class="item">
                            <a class="image_link image-link animate_background"
                                href="{{ asset('storage/' . $property->image_path) }}">
                                <div class="image_wrap">
                                    <img loading="lazy" class="image"
                                        src="{{ asset('storage/' . $property->image_path) }}" alt="Property Image"
                                        width="770" height="520"
                                        style="width: 100%; height: 100%; object-fit: contain;" />
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach --}}
        <div id="pagination" >
            {{ $rent->links('pagination::default') }}
        </div>
    </section>
    <!-- 画像をクリックしたときに表示されるモーダル -->
    <div class="modal">
        <span class="close">&times;</span>
        <img class="modal-content">
    </div>

    @include('landing.components.footer')
    {{-- </div> --}}

    {{-- <div id="return_top">
        <a class="no_auto_scroll" href="#body"><span class="arrow"><span></span></span></a>
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
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jscript.js?ver=1.0" id="jscript-js">
    </script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jquery.cookie.min.js?ver=1.0"
        id="jquery.cookie.min-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/assets/js/prism.js?ver=2.0.1"
        id="hcb-prism-js"></script>
    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/clipboard.min.js?ver=2.0.11"
        id="clipboard-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/build/js/hcb_script.js?ver=2.0.1"
        id="hcb-script-js"></script>
    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            const formData = new FormData(document.getElementById('search-form'));
            fetch('{{ route('properties.search') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => renderProperties(data))
                .catch(error => {
                    console.error('Error:', error);
                    alert('検索中にエラーが発生しました。');
                });
        });

        function renderProperties(data) {
            const resultContainer = document.getElementById('result-container');
            const defaultRent = document.getElementById('default_rent');
            const pagination = document.getElementById('pagination');

            defaultRent.innerHTML = ''; // 既存の内容をクリア
            resultContainer.innerHTML = ''; // 既存の内容をクリア
            pagination.innerHTML = ''; 

            // let allImages = [];
            if (data.length <= 0) {
                const noProperty = document.createElement('p');
                noProperty.classList.add('no-property');
                noProperty.textContent = '条件を選択してください。';
                resultContainer.appendChild(noProperty);
            }
            for (const [railwayName, properties] of Object.entries(data)) {

                // 路線名のタイトルを追加
                const railwayTitle = document.createElement('h1');
                railwayTitle.classList.add('railway-title');
                railwayTitle.textContent = railwayName;
                resultContainer.appendChild(railwayTitle);

                if (properties.length === 0) {
                    // 物件がない場合
                    const noProperty = document.createElement('p');
                    noProperty.classList.add('no-property');
                    noProperty.textContent = '該当する物件はありません。';
                    resultContainer.appendChild(noProperty);
                } else {
                    // 物件リストを生成
                    const blogList = document.createElement('div');
                    blogList.classList.add('blog_list');

                    properties.forEach(property => {
                        const item = document.createElement('div');
                        item.classList.add('item');

                        const link = document.createElement('a');
                        link.href = `/storage/${property.image_path}`;
                        link.classList.add('image_link', 'image-link', 'animate_background');

                        const imageWrap = document.createElement('div');
                        imageWrap.classList.add('image_wrap');

                        const image = document.createElement('img');
                        image.src = `/storage/${property.image_path}`;
                        image.alt = `Property Image`;
                        imageWrap.classList.add('image')
                        image.style.width = '100%';
                        image.style.height = '100%';
                        image.style.objectFit = 'contain';

                        imageWrap.appendChild(image);
                        link.appendChild(imageWrap);
                        item.appendChild(link);
                        blogList.appendChild(item);
                    });

                    resultContainer.appendChild(blogList);

                    // const promises = allImages.map(img => new Promise(resolve => {
                    //     img.onload = resolve; // 画像の読み込み完了時
                    //     img.onerror = resolve; // エラーでも続行
                    // }));

                    // Promise.all(promises).then(() => {
                    //     loadingIndicator.style.display = 'none';
                    // });
                }
            }
            initImageModal()
        }

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


        (function($) {
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
                initImageModal()
            }, 300);

        })(jQuery);
        // モーダルの表示処理を関数化
        function initImageModal() {
            // 画像リンクをクリックしたときにモーダルを表示
            const imageLinks = document.querySelectorAll('.image-link');
            const modal = document.querySelector('.modal');
            const header = document.querySelector('#header');
            const modalContent = modal.querySelector('.modal-content');
            const closeModal = modal.querySelector('.close');

            imageLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    modalContent.src = this.href;
                    modal.style.display = 'block';
                    header.style.display = 'none';
                });
            });

            // モーダルの閉じるボタンがクリックされたとき、モーダルを非表示にする
            closeModal.addEventListener('click', function() {
                modal.style.display = 'none';
                header.style.display = 'block';
            });
            // モーダルの背景がクリックされたとき、モーダルを非表示にする
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    header.style.display = 'block';
                }
            });
        }
    </script>
@endsection
