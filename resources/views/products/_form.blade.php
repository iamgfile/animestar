<!--
require	$submitbuttontext
-->

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="form-group">
    {!! Form::label('title', 'title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>		
<br>
<div class="form-group">
    {!! Form::label('description', 'description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'upload image (must be smaller than 400:400)', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rating', 'rating (must be 0 to 100 integer)', ['class' => 'control-label']) !!}
    {!! Form::text('rating', null, ['class' => 'form-control']) !!}
</div>
@if(\Route::current() -> getName() == 'edit')

    {!! Form::checkbox('delete',null, ['class' => 'form-control']) !!}
    
delete the image 
@endif
<br>
{{ link_to_action('Products@index', 'back', [], ['class' => 'btn btn-default']) }}
<div class="text-right">
    {!! Form::submit($submitbuttontext,['class' => 'btn btn-primary']) !!}
</div>
