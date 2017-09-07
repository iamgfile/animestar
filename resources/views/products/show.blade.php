@extends('../shared/application')
@section('title', "show")
@section('content')
{!!'title: '.$product->title!!}
<br>
{!!'description: '.$product->description!!}
<br>
@if (!!$product->image_filename && $product->image_filename != "noimage")
    <img src="{{ asset('storage/productimage/' .$product->image_filename) }}" alt="image" />
    <br>
@endif

{{ link_to_action('Products@index', 'back', [], ['class' => 'btn btn-default']) }}
<br>
<div class="text-right">
    {{ link_to_action('Products@edit', 'edit this anime', [$product->id], ['class' => 'btn btn-warning']) }}
    {{Form::open(['action'=> ['Products@destroy', $product->id], 'method' => 'DELETE']) }}
    {{Form::submit('Delete this anime', ['class' => 'btn btn-danger']) }}
    {{Form::close()}}
</div>
@endsection
