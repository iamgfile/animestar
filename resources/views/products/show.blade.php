@extends('../shared/application')
@section('title', "show")
@section('content')
  {!!'title: '.$product->title!!}
  <br>
  {!!'description: '.$product->description!!}
  <br>
  <br>
  <a href="{{ url('/') }}", class="btn btn-default">back</a>
  <br>
  <a href="{{ url('/products/'.$product->id.'/edit') }}", class="btn btn-warning">edit this anime</a>
  <a href="{{ url ('/products/'.$product->id) }}", class="btn btn-danger", data-method="DELETE">delete this anime</a>
@endsection
