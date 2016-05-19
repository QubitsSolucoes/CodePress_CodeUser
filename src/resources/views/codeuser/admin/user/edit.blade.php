@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Edit User</h3>

        {!! Form::model($user, ['method'=>'put', 'route'=>['admin.users.update', $user->id]]) !!}

        <div class="form-group">
            {!! Form::label('E-mail', "E-mail:") !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Username', "Username:") !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection
