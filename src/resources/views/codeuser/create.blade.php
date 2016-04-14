@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Create User</h3>

        {!! Form::open(['method'=>'user', 'route'=>['admin.users.store']]) !!}

        <div class="form-group">
            {!! Form::label('E-mail', "E-mail:") !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Username', "username") !!}
            {!! Form::textarea('username', null, ['class'=>'form-control']) !!}}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection
