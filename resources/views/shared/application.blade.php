<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/app.css') }}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
