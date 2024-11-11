@extends('layout.landing.app')

@section('title', '代表挨拶 | 株式会社BATON 世田谷のおすすめ部屋探し')

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
                <div class="gray_bg" id="company_message">
                    <div class="design_header inview">
                        {{-- <div class="title_area">
                                <h3 class="large_headline title catch"><span>代表挨拶</span></h3>
                                <p class="sub_title colored"><span>CEOメッセージ</span></p>
                            </div> --}}
                    </div>
                    <h4 style="font-size: 40px;" class="colored catch ">代表挨拶</h4>
                    <div class="post_row">
                        <div class="post_col post_col-2 inview slide_up_animation">
                            <p>皆さま、こんにちは。株式会社BATONのホームページへお越しいただき、誠にありがとうございます。代表の立川です。
                            </p>

                            {{-- <p> <span style="font-size: 25px; font-weight: bold;">経営の目的</span> </br> --}}
                            早速ではございますが、社名となる「BATON」の由来は<span style="text-decoration: underline;font-weight: bold;">
                                「つないでいく」</span>との想いを込めております。昨今の社会情勢、気候変動より、今後はより厳しい生活環境が想定されます。今、弊社ができることは限られていると思いますが、できることを一つ一つ実現していくことにより、次世代の方々へ少しでも良いカタチでBATONをつないでいきたいと想っております。先ずは不動産業より価格、サービス両面において、業界のイメージを払拭すべく、透明性が高く、質の高いコミュニケーションを心掛け、お客様に理想の物件をお届けできるよう、誠実にしっかりと努めさせていただきます。</br>
                            また、具体的な支援策としては下記２点を掲げさせていただいております。</br></br>

                            1.上京学生への支援</br>
                            上京してくる学生の皆さんには、特に温かいサービスを提供したいと考えております。初めての都会生活に不安を抱える学生の方々が、安心して新生活を始められるよう、物件の選定から入居後のサポートまで一貫したサービスを心掛けています。学業に専念できる環境作りのお手伝いをすることは、弊社を起業した目的であり、私にとって大切な使命であると認識しております。
                            </br></br>

                            2.主婦の方々の雇用環境支援</br>
                            私自身PTA活動を通じて、主婦の方々と多くの時間を共有していく中で、ビジネス能力の高さを感じることができました。一方で主婦の方々が活躍するための雇用環境に対しては、未だ多くの課題が混在しているものと認識しております。例えば育児や家事に要する時間への配慮です。このような課題に対してビジネスと両立しやすい柔軟な働き方を提供させていただき、きめ細やかな対応ができる地元に根差した主婦の方々と、お客様に寄り添い心温まるサービスを強みにしていくことが直近の目標です。
                            </br></br>
                            引き続きより多くの方々に喜ばれるサービスを提供してまいります。今後ともよろしくお願い申し上げます。</br></br>
                            代表取締役 立川宰輝
                            </p>

                            {{-- <p> <span style="font-size: 25px;  font-weight: bold;">不動産業を選んだ理由</span> </br>
                                なぜ不動産業だったかというと、先ずは今後を担う若手に対して、最大の生活基盤となる住居より支援したかったからです。特に地方から10代のお子様を一人で上京させる親御さんの心中は多くの不安に駆られることと思います。そんな中、住居を探すにも業者側も繁忙期であること、時間や金銭的な負担が大きいことから限られた時間の中、結果として少ない選択肢しか残されておりません。</br>
                                私の出身は新潟となるのですが、25年前の上京の際には希望とは異なる物件で決めてしまいました。寧ろ限られた時間の中では選択することはできなかったです。もっと親身に説明してもらえていたら・・・少し違った選択をしていたと思いますが、その時の私は「自分が無知だったのだから仕方ない」と諦めました。</br>
                                事前に準備を進めることで、上記のような不安の多くは払拭することができます。あとは業者に受け入れの気持ちがあるかどうかだと思っております。私は過去の境遇と子どもに対しての想い、そして会社設立の目的より若手への支援に対しては、より深く注力して取り組んで参りたいと考えております。
                            </p> --}}


                        </div>
                        <div class="post_col post_col-2">
                            <div class="shutter_image inview col1">
                                <div class="item"><img fetchpriority="high" decoding="async" src="koki.jpg" alt=""
                                        width="580" height="580" class="alignnone size-full wp-image-5943" /></div>
                            </div>
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
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jquery.cookie.min.js?ver=1.0"
        id="jquery.cookie.min-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/assets/js/prism.js?ver=2.0.1"
        id="hcb-prism-js"></script>
    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/clipboard.min.js?ver=2.0.11"
        id="clipboard-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jscript.js?ver=1.0" id="jscript-js">
    </script>

    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/build/js/hcb_script.js?ver=2.0.1"
        id="hcb-script-js"></script>
    <script>
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
            }, 300);

        })(jQuery);
    </script>
@endsection
