<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            line-height: 1.6;
            color: #444;
        }

        container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
    
        }


        .product img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .product h2 {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .product p {
            color: #777;
            margin-bottom: 10px;
        }

        .product button {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .product button:hover {
            background-color: #673ab7;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            header {
                padding: 15px 0;
            }

            nav a {
                padding: 10px;
            }

            .product {
                padding: 15px;
            }
        }
    </style>
    <title>
        @yield('title')
    </title>
</head>

<body>
    @yield('content')
</body>

</html>
