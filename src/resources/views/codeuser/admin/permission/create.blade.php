@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Create Permission</h3>

        {!! Form::open(['method'=>'post', 'route'=>['admin.permissions.store']]) !!}

        <div class="form-group">
            {!! Form::label('Name', "Name") !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Description', "Description") !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection
