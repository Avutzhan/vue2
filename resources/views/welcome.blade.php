<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        <div id="app">
{{--            <input type="text" v-model="coupon">--}}
{{--            <input type="text" :value="coupon" @input="coupon = $event.target.value">--}}

            <coupon v-model="coupon">
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
