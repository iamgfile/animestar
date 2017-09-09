@extends('../shared/application')
@section('title', "index")
@section('content')
<h1>welcome to animestar</h1>
<div class="text-right">
    {{ link_to_action('Products@new', 'add a new anime', [], ['class' => "btn btn-primary"]) }}
</div>
<hr/>
{!! $products->render() !!}
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>image</th>
                <th>title</th>
                <th>description</th>
                <th>rating</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td><img src="{{ asset('storage/productimage/' .$product->image_filename) }}" alt="image"/></td>
                <td>{!!$product->title!!}</td>
                <td>{!!$product->description!!}</td> 
                <td>
                    @if ($product->rating>50)
                        <div class="animerating-good">
                    @else
                        <div class="animerating-bad">
                    @endif
                    <h3>{!!$product->rating!!}</h3></div></td> 
                <td>{{ link_to_action('Products@show', 'show this anime', [$product->id], ['class' => 'btn btn-default']) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
