<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
		<title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
	@yield('content')
	</body>
</html>
