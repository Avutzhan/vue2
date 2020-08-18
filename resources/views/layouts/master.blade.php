<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel</title>
    <style>
        html, body { height: 100vh; }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tooltip {
            background: black;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <div id="app">
        <h1>Option n1</h1>
        <p>
            <a>Hello there <span data-tooltip="i am a tooltip" data-tooltip-placement="right">hover over me</span></a>
        </p>

        <h1>Option n2</h1>
        <p>
            <a>Hello there <span v-tooltip:top="'i am a tooltip'">hover over me</span></a>
        </p>

        <h1>Option n3</h1>
        <p>
            <a>Hello there <span data-tooltip-name="our-products-tooltip">learn products</span></a>
        </p>

        <tooltip name="our-products-tooltip" offset="0, 20">
            <div class="p-4 w-64">
                <h1 class="mb-4">Our Products</h1>
                <p>
                    Lorem ipsum
                </p>
            </div>

        </tooltip>

    </div>

<script src="/js/app.js"></script>
</body>
</html>
