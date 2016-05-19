@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Edit Permission</h3>

        {!! Form::model($permission, ['method'=>'put', 'route'=>['admin.permissions.update', $permission->id]]) !!}

        <div class="form-group">
            {!! Form::label('Name', "name") !!}
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
