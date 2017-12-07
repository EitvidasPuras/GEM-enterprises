@extends('layouts.app')

@section('content')
    <a href="{{route('admin')}}" class="btn btn-default">Go back</a>
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
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-success">Edit</a>
                        </th>
                        <th>
                            <button type="button" name="delete" class="btn btn-danger" value="remove"
                                    data-toggle="modal" data-target="#u{{$user->id}}">Remove
                            </button>
                        </th>
                    </tr>
                    <tr></tr>

                @endforeach
            </table>
            @foreach($users as $user)
                <div class="modal fade" id="u{{$user->id}}" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <p>Do you want to remove '{{$user->name}}'?</p>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    {!! Form::open(['action'=>['AdminPageUsersController@destroy',$user->id],'method'=>'POST']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    <input type="submit" name="DELETE" class="btn btn-success" value="Yes"/>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{$users->links()}}
        @else
            <p>No Users Found</p>
        @endif

    </div>

@endsection