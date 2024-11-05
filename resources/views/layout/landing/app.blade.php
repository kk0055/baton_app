<!doctype html>
<html class="pc" lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    @include('partials.meta')

    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='stylesheet' id='swiper-css' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?ver=10.2.0'
        type='text/css' media='all' />
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

    @yield('styles')

    <link rel="icon" href="baton_big_logo.jpg" sizes="32x32" />
    <link rel="icon" href="baton_big_logo.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="baton_big_logo.jpg" />
    <meta name="msapplication-TileImage" content="baton_big_logo.jpg" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/landing.css') }}" rel="stylesheet">
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
<body data-rsssl="1" id="body" class="@yield('bodyClass', 'default')">
    @yield('content')

    @yield('js')
</body>

</html>
