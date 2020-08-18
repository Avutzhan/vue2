<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.0/css/bulma.min.css">
    <title>Laravel</title>


</head>
<body>

    <div id="app">
        <menu-list :items="['one', 'two']">
            <template slot="menu-item" scope="props">
                <h2 v-text="props.item"></h2>
            </template>
        </menu-list>
    </div>

<script src="/js/app.js"></script>
</body>
</html>
