@extends('../shared/application')
@section('title', "index")
@section('content')
  <h1>welcome to animestar</h1>
  <div class="text-right">
	  <a href="{{ url('/products/new') }}", class="btn btn-primary">add new anime</a>
  </div>
	<hr/>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>title</th>
          <th>description</th>
          <th colspan="3"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
	          <td>{!!$product->title!!}</td>
	          <td>{!!$product->description!!}</td>
            <td><a href="{{ url('/products/'.$product->id) }}", class="btn btn-default">show this anime</a></td>
          </tr>      
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
