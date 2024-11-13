<!doctype html>
<html class="pc" lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    @include('partials.meta')

    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='stylesheet' id='swiper-css' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?ver=10.2.0'
        type='text/css' media='all' />

    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>

    @yield('styles')
    <link rel="canonical" href="@yield('canonical', 'https://xbatonx.com/')" />

    <link rel="icon" href="baton_logo2.jpg" sizes="32x32" />
    <link rel="icon" href="baton_logo2.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="baton_logo2.jpg" />
    <meta name="msapplication-TileImage" content="baton_logo2.jpg" />

    
    <link href="{{ asset('css/landing/main-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/design-plus.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/sns-botton.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/wp-block-library.css') }}" rel="stylesheet">

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
