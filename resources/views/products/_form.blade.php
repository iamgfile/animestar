<!--
require	$submitbuttontext
-->

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="form-group">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>		
<br>
<div class="form-group">
    {!! Form::label('description', 'description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'upload image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>


{{ link_to_action('Products@index', 'back', [], ['class' => 'btn btn-default']) }}
<div class="text-right">
    {!! Form::submit($submitbuttontext,['class' => 'btn btn-primary']) !!}
</div>
