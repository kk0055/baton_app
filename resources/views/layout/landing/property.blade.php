<!DOCTYPE html>
<html class="pc" lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
   
    @include('partials.meta')

    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='stylesheet' id='swiper-css'
        href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?ver=10.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='main-style-css'
        href='https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/style.css?ver=6.5.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='design-plus-css'
        href='https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/css/design-plus.css?ver=1.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sns-botton-css'
        href='https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/css/sns-botton.css?ver=1.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'
        href='https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/css/responsive.css?ver=1.0'
        type='text/css' media='screen and (max-width:1391px)' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://demo.tcd-theme.com/tcd103/wp-includes/css/dist/block-library/style.min.css?ver=6.5.4'
        type='text/css' media='all' />
  
    <link rel='stylesheet' id='child-style-css'
        href='https://demo.tcd-theme.com/tcd103/wp-content/themes/GENESIS-child/style.css?ver=6.5.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='hcb-style-css'
        href='https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/build/css/hcb--light.css?ver=2.0.1'
        type='text/css' media='all' />
    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://demo.tcd-theme.com/tcd103/wp-json/" />

    <link rel="icon" href="baton_big_logo.jpg" sizes="32x32" />
    <link rel="icon" href="baton_big_logo.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="baton_big_logo.jpg" />
    <meta name="msapplication-TileImage" content="baton_big_logo.jpg" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/landing.css') }}" rel="stylesheet">
    <title>
        @yield('title')
    </title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0V4CE08KJL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0V4CE08KJL');
    </script>
    <!-- Google tag (gtag.js) -->
</head>

<body data-rsssl=1 id="body" class="blog wp-embed-responsive megamenu_dark_color">
    <div id="js-body-start"></div>

    @include('landing.components.landing_page_header')

    {{-- <div id="container"> --}}
    @yield('content')
    @include('landing.components.footer')
    {{-- </div> --}}

    {{-- <div id="return_top">
        <a class="no_auto_scroll" href="#body"><span class="arrow"><span></span></span></a>
    </div> --}}

    @include('landing.components.landing_page_mobile_header')

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
    <script type="text/javascript" id="hcb-script-js-extra">
        /* <![CDATA[ */
        var hcbVars = {
            "showCopyBtn": "1",
            "copyBtnLabel": "\u30b3\u30fc\u30c9\u3092\u30af\u30ea\u30c3\u30d7\u30dc\u30fc\u30c9\u306b\u30b3\u30d4\u30fc\u3059\u308b"
        };
        /* ]]> */
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
    </script>
</body>

</html>
