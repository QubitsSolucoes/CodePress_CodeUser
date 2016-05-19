@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Permissions</h3>

        <a href="{{ route('admin.permissions.create') }}">Create Permission</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tboby>
                @foreach($permissions as $key => $permission)
                    <tr>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td>
                            <a name="link_edit_permission_{{$key}}" href="{{route('admin.permissions.edit', ['id'=>$permission->id])}}">
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tboby>
        </table>
    </div>

@endsection
