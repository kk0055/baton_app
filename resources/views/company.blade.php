@extends('layout.landing.app')
@section('title', '会社紹介 | 株式会社BATON 人気物件紹介＆初期費用自信有り')

@section('styles')
    <style id="current-page-style" type="text/css">
        #page_header .overlay {
            background-color: rgba(0, 0, 0, 0.3);
        }

        @media only screen and (min-width: 801px) {
            .design_header .large_headline {
                margin-top: -20px;
            }

            .title {
                margin-top: -12px !important;
            }

            .title3 {
                margin-top: 2px !important;
            }

            #page_header .desc_area {
                margin: -97px auto 140px;
            }

            #page_header .desc {
                margin-bottom: -3px;
            }

            .post_content:empty+.gallery_content {
                margin-top: -161px;
            }

            .gallery_content_header .desc {
                margin-bottom: -42px;
            }

            .design_header {
                margin-top: 13px !important;
                margin-bottom: 58px;
            }

            .post_content p {
                margin: 0 0 41px 0;
            }

            #page_header .design_header {
                margin: -10px auto 147px;
            }

            #company_message .catch {
                margin: -15px 0 34px 0;
            }

            .gray_bg {
                padding: 134px 0;
            }

            #company_data_list h4 {
                margin: 0px 0 37px 0;
            }

            #company_data_list {
                margin: 55px 0 139px;
            }

            #page_contents {
                padding-bottom: 147px;
            }

            #company_data_list td {
                padding: 0 0 0px 0;
                line-height: 45px;
            }

            .sub_title.colored {
                margin-bottom: -5px !important;
            }

            #company_data_list th {
                width: 150px;
            }
        }

        @media screen and (max-width: 800px) {
            .design_header .large_headline {
                margin-top: -3px;
                !important
            }

            body:not(.show_sidebar) #page_header.large_height .design_header {
                margin: -44px 0 10px 0;
            }

            .sub_title.colored {
                margin-top: 8px;
                margin-bottom: 20px;
            }

            .gray_bg {
                padding: 37px 0;
            }

            #company_message .catch {
                margin: -12px 0 22px 0;
            }

            .design_header {
                margin-top: 37px;
                margin-bottom: 38px;
            }

            #company_data_list .s_table {
                margin-top: 27px;
                font-size: 14px;
            }

            #company_access .qt_google_map {
                margin-top: -5px !important;
                margin-bottom: 32px;
            }

            #page_contents {
                padding-bottom: 39px;
            }

            .title3 {
                margin-top: -1px !important;
            }

            .post_content p {
                margin: 0 0 37px 0;
            }

            #company_message .post_col img {
                margin: 32px auto 3px !important;
            }

            .name {
                margin-bottom: -2px !important;
            }

            body:not(.show_sidebar) #page_header.large_height {
                height: 250px;
            }

            .design_header .title_area.no_desc {
                margin-top: 28px;
            }

            .shutter_image {
                margin-top: -3px;
            }

            .post_content .s_table table {
                margin-bottom: 25px;
            }
        }
    </style>
@endsection



@section('bodyClass', 'page-template-default page page-id-5942 wp-embed-responsive megamenu_dark_color hide_sidebar
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
                                        <td>〒107-0062 <br /> 東京都港区南青山一丁目1番1号 新青山ビル東館7F</td>
                                    </tr>
                                    <tr>
                                        <th>TEL</th>
                                        <td>03-6865-8533 </br> 
                                        070-5366-0412
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>FAX</th>
                                        <td>03-6745-8422</td>
                                    </tr>
                                    <tr>
                                        <th>Mail</th>
                                        <td><a href="mailto:company@xbatonx.co.jp">company@xbatonx.co.jp</a></td>
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
                                        <td>昭和信用金庫 </br>GMOあおぞらネット銀行</td>
                                    </tr>
                                    <tr>
                                        <th>顧問税理士</th>
                                        <td>鈴木会計事務所</td>
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
