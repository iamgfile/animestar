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
<div class="text-right">
    {{ link_to_action('Products@edit', 'edit this anime', [$product->id], ['class' => 'btn btn-warning']) }}
    {{Form::open(['action'=> ['Products@destroy', $product->id], 'method' => 'DELETE']) }}
    {{Form::submit('Delete this anime', ['class' => 'btn btn-danger']) }}
    {{Form::close()}}
</div>
@endsection
