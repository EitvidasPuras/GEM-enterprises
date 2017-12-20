@extends('layouts.app')

@section('content')
    <a href="{{route('supplier_main')}}" class="btn btn-default">Go back</a>
    <h1>Contact</h1>
    <div class="container">


        {!! Form::open(['action'=>['SupplierContactController@sendMessage'],'method'=>'POST']) !!}
        <div class="form-group">
            <label>Kam</label>
            <select   class="form-control" name="receiver">
                @foreach($users as $user )
                    <option value="{{$user->email}}">{{$user->name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="msg"> </textarea>
        </div>
        {{Form::submit('Send',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>

@endsection