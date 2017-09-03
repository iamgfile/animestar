@extends('../shared/application')
@section('title', "show")
@section('content')
  {!!'title: '.$product->title!!}
  <br>
  {!!'description: '.$product->description!!}
  <br>
  <br>
  {{ link_to_action('Products@index', 'back', [], ['class' => 'btn btn-default']) }}
  <br>
  {{ link_to_action('Products@edit', 'edit this anime', [$product->id], ['class' => 'btn btn-warning']) }}
  {{ link_to_action('Products@destroy', 'delete this anime', [$product->id], ['class' => 'btn btn-danger']) }}
@endsection
