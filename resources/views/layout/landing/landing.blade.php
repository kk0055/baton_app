<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/landing/landing.css') }}" rel="stylesheet">
    <title>
        @yield('title')
    </title>
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/landing/landing.js') }}"></script>
</body>

</html>
