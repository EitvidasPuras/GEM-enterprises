@extends('layouts.app')

@section('content')
    <a href="{{route('supplier_main')}}" class="btn btn-default">Go back</a>
    <h1>Profile</h1>
    <div class="container">

        @if(COUNT($supplier) < 1)
            {!! Form::open(['action'=>['SupplierProfileController@storeProfileInfo'],'method'=>'POST']) !!}
            <div class="form-group">
                <label>Company name</label>
                <input type="text" class="form-control" name="Cname" value="">
            </div>
            <div class="form-group">
                <label>Company code</label>
                <input type="text" class="form-control" name="Ccode" value="">
            </div>
            <div class="form-group">
                <label>Bank code</label>
                <input type="text" class="form-control" name="Bcode" value="">
            </div>
            <div class="form-group">
                <label>Company address</label>
                <input type="text" class="form-control" name="Caddress" value="">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" name="Pnumber" value="">
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        @else
            <div class="form-group">
                <label>Company name</label>
                <input type="text" class="form-control" name="name" value="{{$supplier->companyName}}" readonly>
            </div>
            <div class="form-group">
                <label>Company code</label>
                <input type="text" class="form-control" name="name" value="{{$supplier->companyCode}}" readonly>
            </div>
            <div class="form-group">
                <label>Bank code</label>
                <input type="text" class="form-control" name="name" value="{{$supplier->bankCode}}" readonly>
            </div>
            <div class="form-group">
                <label>Company address</label>
                <input type="text" class="form-control" name="name" value="{{$supplier->address}}" readonly>
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" name="name" value="{{$supplier->phoneName}}" readonly>
            </div>
        @endif

    </div>

@endsection