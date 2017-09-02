@extends('../shared/application')
@section('title', "index")
@section('content')
	welcome to animestar
	<br>
	<a href="{{ url('/products/new') }}">add new anime</a>
	<hr/>
	@foreach($products as $product)
		{!!'title: '.$product->title!!}
		<br>
		{!!'description: '.$product->description!!}
		<br>
		<a href="{{ url('/products/'.$product->id) }}">show this anime</a>
		<br>		
		<br>
	@endforeach
@endsection
