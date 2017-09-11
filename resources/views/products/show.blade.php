@extends('../shared/application')
@section('title', "show")
@section('content')
@if (!!$product->image_filename && $product->image_filename != "noimage.png")
    <img src="{{ asset('storage/productimage/' .$product->image_filename) }}" alt="image" />
    <br>
@endif
<h2>{!!$product->title!!}</h2>
<br>
</h4>{!!$product->description!!}</h4>
<br>
@if ($product->rating>50)
    <div class="animerating-good">
@else
    <div class="animerating-bad">
@endif
        <h4>{!!$product->rating!!}</h4>
    </div> 
<br>
{{ link_to_action('Products@index', 'back', [], ['class' => 'btn btn-default']) }}
<br>
<div class="text-right">
    {{ link_to_action('Products@edit', 'edit this anime', [$product->id], ['class' => 'btn btn-warning']) }}
    {{Form::open(['action'=> ['Products@destroy', $product->id], 'method' => 'DELETE']) }}
    {{Form::submit('Delete this anime', ['class' => 'btn btn-danger']) }}
    {{Form::close()}}
</div>
@endsection
