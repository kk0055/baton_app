@extends('layout.landing.app')
@section('title', '会社紹介 | 株式会社BATON 人気物件紹介＆初期費用自信有り')
@section('description', '株式会社BATONについてのご紹介。世田谷エリアを中心に賃貸仲介のプロフェッショナルとして、理想の住まい探しをサポートします。大手に負けないサービスと、初期費用の安さが強みです。')
@section('canonical', 'https://xbatonx.com/company')
@section('styles')
    <style id="current-page-style" type="text/css">
        /* フォントの基本設定 */
        #page_contents {
            font-family: 'Noto Sans JP', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #333333;
            line-height: 1.8;
        }

        /* ヘッダー部分のスタイル */
        #page_header .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
        }

        /* 会社概要のタイトル */
        #company_data_list h4 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
            letter-spacing: 0.05em;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 15px;
        }


        /* サブタイトル */
        #company_data_list p {
            font-size: 1.2rem;
            color: #2d5aa8;
            margin-bottom: 3rem;
            font-weight: 500;
            letter-spacing: 0.03em;
        }

        /* テーブルのスタイル */
        #company_data_list .s_table table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 2rem;
        }

        #company_data_list th,
        #company_data_list td {
            padding: 1.5rem;
            border-bottom: 1px solid #eaeaea;
            line-height: 1.6;
        }

        #company_data_list th {
            width: 180px;
            font-weight: 600;
            color: #1a1a1a;
            background: #f8f9fa;
        }

        #company_data_list td {
            color: #4a4a4a;
        }

        #company_data_list td a {
            color: #2d5aa8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        #company_data_list td a:hover {
            color: #1e3c72;
        }

        /* レスポンシブ対応 */
        @media only screen and (min-width: 801px) {
            .design_header .large_headline {
                font-size: 3rem;
                letter-spacing: 0.1em;
                margin-bottom: 1rem;
            }

            #company_data_list {
                max-width: 900px;
                margin: 4rem auto;
                padding: 0 2rem;
            }
        }

        @media screen and (max-width: 800px) {
            #company_data_list h4 {
                font-size: 2rem;
            }

            #company_data_list p {
                font-size: 1rem;
            }

            #company_data_list th,
            #company_data_list td {
                display: block;
                width: 100%;
                padding: 1rem;
            }

            #company_data_list th {
                background: #f8f9fa;
                border-bottom: none;
            }
        }

        /* アニメーション効果 */
        .inview {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .inview.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* ホバーエフェクト */
        .s_table tr {
            transition: background-color 0.3s ease;
        }

        .s_table tr:hover {
            background-color: #f8f9fa;
        }
    </style>
@endsection



@section('bodyClass',
    'page-template-default page page-id-5942 wp-embed-responsive megamenu_dark_color hide_sidebar
    normal_content_width')

@section('content')
    <div id="js-body-start"></div>

    @include('landing.components.landing_page_header')

    <div id="container">
        {{-- <div id="page_header" class="large_height" style="margin-top: 50px;">
            <div class="design_header inview">
                <div class="title_area no_desc">
                    <h1 class="large_headline"><span>会社紹介</span></h1>
                </div>
            </div>
        </div> --}}

        <article id="page_contents">
            <div class="post_content">
                <div class="design_header inview" id="profile">
                    <div class="title_area">
                        {{-- <h3 class="large_headline title3"><span>PROFILE</span></h3> --}}
                        {{-- <p class="sub_title colored"><span>会社情報</span></p> --}}
                    </div>
                </div>
                <div class="post_row" id="company_data_list">
                    <div class="post_col post_col-2 inview slide_up_animation">
                        <h4 style="font-size: 40px;">会社概要</h4>
                        <p style="font-size: 20px; font-weight: bold;">事業を通じて、これからの明るい未来へ繋ぐ「BATON」</p>

                        <div class="s_table">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>会社名</th>
                                        <td>株式会社BATON</td>
                                    </tr>
                                    <tr>
                                        <th>代表取締役</th>
                                        <td>立川　宰輝</td>
                                    </tr>
                                    <tr style="word-wrap: break-word;white-space: normal;">
                                        <th>所在地</th>
                                        <td>〒156-0051<br />
                                            東京都世田谷区宮坂1-10-11</td>
                                    </tr>
                                    <tr>
                                        <th>事業内容</th>
                                        <td>不動産の売買、賃貸仲介、管理
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>TEL</th>
                                        <td>03-6314-1254 </br>
                                            070-5366-0412
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>FAX</th>
                                        <td>03-6745-8422</td>
                                    </tr>
                                    <tr>
                                        <th>Mail</th>
                                        <td><a href="mailto:company@xbatonx.com">company@xbatonx.com</a></td>
                                    </tr>
                                    <tr>
                                        <th>資本金</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>免許番号</th>
                                        <td>東京都知事(1)第111508号</td>
                                    </tr>
                                    <tr>
                                        <th>加盟団体</th>
                                        <td>公益社団法人全日本不動産協会 </br> 公益社団法人不動産保証協会</br> 東京商工会議所</td>
                                    </tr>
                                    <tr>
                                        <th>金融機関</th>
                                        <td>三井住友銀行</br>昭和信用金庫 </br>GMOあおぞらネット銀行</td>
                                    </tr>
                                    <tr>
                                        <th>顧問税理士</th>
                                        <td>鈴木会計事務所</td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><a href="{{ asset('customer-harassment-policy.pdf') }}" target="_blank">
                                                カスタマーハラスメントにおける基本方針
                                            </a></td>
                                    </tr>
                                    {{-- <tr>
                                        <th>事業内容</th>
                                        <td>賃貸物件、売買物件の仲介業</td>
                                    </tr> --}}
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </article>
        @include('landing.components.footer')

    </div>

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
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/tcd_cookie.js?ver=1.0"
        id="tcd.cookie.min-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/assets/js/prism.js?ver=2.0.1"
        id="hcb-prism-js"></script>
    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/clipboard.min.js?ver=2.0.11"
        id="clipboard-js"></script>

    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/build/js/hcb_script.js?ver=2.0.1"
        id="hcb-script-js"></script>
    <script>
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
            }, 300);

        })(jQuery);
    </script>
@endsection
