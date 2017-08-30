    <h1>add a new anime</h1>
    <hr/>
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('title', 'title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add a new anime', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
