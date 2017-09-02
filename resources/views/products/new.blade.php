@extends('../shared/application')
@section('title', "show")
@section('content')
  <h1>add a new anime</h1>
  <hr/>
 			{!! Form::open() !!}
		<div class="form-group">
      {!! Form::label('title', 'title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>		
	<br>
		<div class="form-group">
      {!! Form::label('description', 'description:') !!}
      {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
		<div class="text-right">
      {!! Form::submit('Add a new anime',['class' => 'btn btn-primary']) !!}
	</div>
  		{!! Form::close() !!}
@endsection
