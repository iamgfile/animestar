@extends('../shared/application')
@section('title', "edit")
@section('content')
    <h1>edit {!!$product->title !!}</h1>
    <hr/>
    {{ Form::model($product, ['method' => 'PATCH', 'action' => ['Products@update', $product->id], 'files' => true]) }}
    @include('products._form', ['submitbuttontext' => 'edit the anime'])
    {{ Form::close() }}
@endsection
