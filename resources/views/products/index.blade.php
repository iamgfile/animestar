@extends('../shared/application')
@section('title', "index")
@section('content')
<h1>welcome to animestar</h1>
<div class="text-right">
    {{ link_to_action('Products@new', 'add a new anime', [], ['class' => "btn btn-primary"]) }}
</div>
<hr/>
{!! $products->render() !!}
    @foreach($products as $product)
        <div class="index-box">
            {{ link_to_action('Products@show', 'show this anime', [$product->id]) }}
            <img src="{{ asset('storage/productimage/' .$product->image_filename) }}" alt="image"/>
            <h2>{!!$product->title!!}</h2>
            <h4>{!!$product->description!!}</h4>
            <br> 
        </div>
        <hr>
    @endforeach    
@endsection
