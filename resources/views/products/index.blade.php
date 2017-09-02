@extends('../shared/application')
@section('title', "index")
@section('content')
	welcome to animestar
	<br>
	<a href="{{ url('/products/new') }}", class="btn btn-primary">add new anime</a>
	<hr/>
	@foreach($products as $product)
		{!!'title: '.$product->title!!}
		<br>
		{!!'description: '.$product->description!!}
		<br>
		<a href="{{ url('/products/'.$product->id) }}", class="btn btn-default">show this anime</a>
		<br>		
		<br>
	@endforeach
@endsection
