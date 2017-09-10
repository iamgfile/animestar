<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/app.css') }}
        {{ Html::style('css/custom.css') }}
        <div class="center"><h2><p>animestar</p><h2></div>
    </head>
    <body>
        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </body>
</html>
