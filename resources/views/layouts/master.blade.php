<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel</title>


</head>
<body>
    <div id="app" style="padding-top: 2000px">

        <div>
            <example-component :to="11"></example-component>
        </div>

        <div>
            <example-component :to="500"></example-component>
        </div>

        <div>
            <example-component :to="1955"></example-component>
        </div>

    </div>

<script src="/js/app.js"></script>
</body>
</html>
