@extends('layouts.app')

@section('content')
    <a href="../" class="btn btn-default">Go back</a>
    <h1>Users</h1>
    <hr>

    {!! Form::open(['action'=>['AdminPageUsersController@update',$user->id],'method'=>'POST']) !!}
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label>Role</label>
        <br>
        <label><input type="radio" value="user" name="role" {{$user->hasRole('User') ? 'checked' : ''}}>User</label>
        <label><input type="radio" value="supplier" name="role" {{$user->hasRole('Supplier') ? 'checked' : ''}}>Supplier</label>
        <label><input type="radio" value="admin" name="role" {{$user->hasRole('Admin') ? 'checked' : ''}}>Admin</label>
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection