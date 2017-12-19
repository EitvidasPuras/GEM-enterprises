@extends('layouts.app')

@section('content')
    <a href="{{route('supplier.items.index')}}" class="btn btn-default">Go back</a>
    <h1>Create product</h1>
    <hr>

    {!! Form::open(['action'=>['SupplierItemsController@store'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group row">
        <label class="control-label col-sm-1">Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="name" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-sm-1">Price</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="price" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1">Amount</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" name="amount" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1">Category</label>
        @if(COUNT($categories)>0)
            <div class="col-sm-2">
                <select class="form-control" name="category">
                    @foreach($categories as $category)
                        <option id="{{$category->id}}" name="category"
                                value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>
    {{--<div class="form-group row">
        <label class="col-sm-1">Supplier</label>
        @if(COUNT($suppliers)>0)
            <div class="col-sm-2">
                <select class="form-control" name="supplier">
                    @foreach($suppliers as $supplier)
                        <option id="{{$supplier->id}}" name="supplier"
                                value="{{$supplier->id}}">{{$supplier->name}}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>--}}
    <div class="form-group row">
        <label class="col-sm-1">Image file</label>
        <input type="file" class="form-control-file col-sm-3" id="cover_image" name="cover_image"
               aria-describedby="fileHelp">
    </div>
    <div class="form-group">
        <label>Description</label>
        <br>
        <textarea class="form-control" name="description" placeholder="Description..."> </textarea>
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>

@endsection