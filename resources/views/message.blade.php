@extends('layout.landing.app')

@section('title', '代表挨拶 | 株式会社BATON 世田谷のおすすめ部屋探し')
@section('description', '株式会社BATON代表からのご挨拶。世田谷の賃貸仲介を通じて、地域のお客様に寄り添った住まい探しを支援しております。お客様に安心してご利用いただけるよう努めております。')
@section('canonical', 'https://xbatonx.com/message')
@section('styles')
    <style id="current-page-style" type="text/css">
        #page_header .overlay {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .message-section {
            padding: 120px 0;
            background-color: #f8f9fa;
        }

        .message-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .message-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .message-title {
            font-size: 42px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            letter-spacing: 0.05em;
        }

        .message-content {
            display: flex;
            gap: 60px;
            align-items: flex-start;
        }

        .message-text {
            flex: 1;
            font-size: 16px;
            line-height: 2;
            color: #555;
        }

        .message-text p {
            margin-bottom: 30px;
        }

        .message-image {
            flex: 1;
            position: relative;
        }

        .message-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .message-image:hover img {
            transform: translateY(-10px);
        }

        .highlight-text {
            background: linear-gradient(transparent 70%, #FFE5E5 70%);
            font-weight: bold;
        }

        .message-points {
            margin-top: 40px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .point-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .signature {
            margin-top: 40px;
            text-align: right;
            font-size: 18px;
            font-weight: bold;
        }

        @media screen and (max-width: 800px) {
            .message-section {
                padding: 60px 0;
            }

            .message-content {
                flex-direction: column;
                gap: 40px;
            }

            .message-title {
                font-size: 32px;
            }

            .message-image {
                order: -1;
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
        <article id="page_contents">
            <section class="message-section">
                <div class="message-container">
                    <div class="message-header">
                        <h1 class="message-title">代表挨拶</h1>
                    </div>

                    <div class="message-content">
                        <div class="message-text">
                            <p>
                                皆さま、こんにちは。株式会社BATONのホームページへお越しいただき、誠にありがとうございます。代表の立川です。
                            </p>
                            <p>
                                早速ではございますが、社名となる「BATON」の由来は<span
                                    class="highlight-text">「つないでいく」</span>との想いを込めております。昨今の社会情勢、気候変動より、今後はより厳しい生活環境が想定されます。今、弊社ができることは限られていると思いますが、できることを一つ一つ実現していくことにより、次世代の方々へ少しでも良いカタチでBATONをつないでいきたいと想っております。
                            </p>
                            <p>
                                先ずは不動産業より価格、サービス両面において、業界のイメージを払拭すべく、透明性が高く、質の高いコミュニケーションを心掛け、お客様に理想の物件をお届けできるよう、誠実にしっかりと努めさせていただきます。
                            </p>

                            <div class="message-points">
                                <div class="point-title">1. 上京学生への支援</div>
                                <p>
                                    上京してくる学生の皆さんには、特に温かいサービスを提供したいと考えております。初めての都会生活に不安を抱える学生の方々が、安心して新生活を始められるよう、物件の選定から入居後のサポートまで一貫したサービスを心掛けています。学業に専念できる環境作りのお手伝いをすることは、弊社を起業した目的であり、私にとって大切な使命であると認識しております。
                                </p>

                                <div class="point-title">2. 主婦の方々の雇用環境支援</div>
                                <p>
                                    私自身PTA活動を通じて、主婦の方々と多くの時間を共有していく中で、ビジネス能力の高さを感じることができました。一方で主婦の方々が活躍するための雇用環境に対しては、未だ多くの課題が混在しているものと認識しております。例えば育児や家事に要する時間への配慮です。このような課題に対してビジネスと両立しやすい柔軟な働き方を提供させていただき、きめ細やかな対応ができる地元に根差した主婦の方々と、お客様に寄り添い心温まるサービスを強みにしていくことが直近の目標です。
                                </p>
                            </div>

                            <p>
                                引き続きより多くの方々に喜ばれるサービスを提供してまいります。今後ともよろしくお願い申し上げます。
                            </p>

                            <div class="signature">
                                代表取締役 立川宰輝
                            </div>
                        </div>

                        <div class="message-image">
                            <img src="koki.jpg" alt="代表取締役 立川宰輝" width="580" height="580" />
                        </div>
                    </div>
                </div>
            </section>
        </article>

        @include('landing.components.footer')
    </div>

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
