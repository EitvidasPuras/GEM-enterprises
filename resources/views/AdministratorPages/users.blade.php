@extends('layouts.app')

@section('content')
    <a href="./" class="btn btn-default">Go back</a>
    <h1>Users</h1>
    <div class="container">

        @if(count($users)> 0)
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Register date</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($users as $user)
                    <tr class="btn-default">
                        <th>{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->created_at}}</th>
                        <th>{{$user->userRole()}}</th>
                        <th>
                            <a href="users/{{$user->id}}/edit" class="btn btn-success">Edit</a>
                        </th>
                        <th>
                            <button class="btn btn-danger">Remove</button>
                        </th>
                    </tr>
                    <tr></tr>
                    {{--<div id="userShow" class=".col-xs-12 .col-sm-6 .col-lg-8 btn-default">
                            <label>{{$user->name}}</label>
                            <label>{{$user->email}}</label>
                        <small>Registered at {{$user->created_at}}</small>
                    </div>--}}
            @endforeach
            </table>
            {{$users->links()}}
        @else
            <p>No Users Found</p>
        @endif

    </div>

@endsection