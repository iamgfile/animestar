<!DOCTYPE html>
<html>
	<head>
		<title>index | animestar</title>
	</head>
	<body>
		welcome to animestar
		<br>
		<a href="{{ url('/products/new') }}">add new anime</a>
		<hr/>
		@foreach($products as $product)
			{{$product->title."<br>".$product->description}}<br>
		@endforeach
	
	</body>
</html>
