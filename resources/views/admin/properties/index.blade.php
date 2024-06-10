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

    header {
        background-color: #5e35b1;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    nav {
        background-color: #7e57c2;
        text-align: center;
        padding: 10px 0;
    }

    nav a {
        text-decoration: none;
        color: #fff;
        padding: 10px 20px;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    nav a:hover {
        background-color: #673ab7;
    }

    section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px 0;
    }

    .product {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        transition: transform 0.3s ease;
    }

    .product:hover {
        transform: translateY(-5px);
    }

    .product img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .product h2 {
        font-size: 1.2em;
        margin-bottom: 5px;
        color: #5e35b1;
    }

    .product p {
        color: #777;
        margin-bottom: 10px;
    }

    .product button {
        background-color: #7e57c2;
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
</head>
<body>
  <div class="container mx-auto text-center px-8 py-24">
    <h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 mb-4">Pricing</h2>
    <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">Check out our affordable pricing options for delicious meals.</p>
  </div>
<container>
    <section>
        <div class="product">
            <img  src="{{ asset('messageImage_1717830807757.jpg') }}" alt="Product Image">
            <h2>Product Name 1</h2>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $50</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/300" alt="Product Image">
            <h2>Product Name 2</h2>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $60</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more products here -->
    </section>
</container>
</body>
</html>