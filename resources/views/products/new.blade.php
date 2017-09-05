@extends('../shared/application')
@section('title', "new")
@section('content')
<h1>add a new anime</h1>
<hr/>
{{ Form::open(['action' => 'Products@create']) }}
@include('products._form', ['submitbuttontext' => 'add a new anime'])
{{ Form::close() }}
@endsection
