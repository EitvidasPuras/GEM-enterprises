@extends('layouts.app')

@section('content')
    <a href="{{route('supplier.items.index')}}" class="btn btn-default">Go back</a>
    <h1>Update product</h1>
    <hr>

    {!! Form::open(['action'=>['SupplierItemsController@update',$item->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group row">
        <label class="control-label col-sm-1">Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="name" value="{{$item->name}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-sm-1">Price</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="price" value="{{$item->price}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1">Amount</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="amount" value="{{$item->amount}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1">Category</label>
        @if(COUNT($categories)>0)
            <div class="col-sm-3">
                <select class="form-control" name="category">
                    @foreach($categories as $category)
                        @if($item->category_id==$category->id)
                            <option id="{{$category->id}}" name="category"
                                    value="{{$category->id}}" selected>{{$category->name}}</option>
                        @else
                            <option id="{{$category->id}}" name="category"
                                    value="{{$category->id}}">{{$category->name}}</option>
                        @endif

                    @endforeach
                </select>
            </div>
        @endif
    </div>
    @if($item->cover_image != "noImage.jpg" && $item->cover_image!="" )
        <div class="form-group row">
            <label class="col-sm-1">Main Photo</label>
            <img class="col-sm-3" src="{{asset("storage/cover_images/$item->cover_image")}}" height="200px"
                 style="border-radius: 10%;">
        </div>
    @endif
    <div class="form-group row">
        <label class="col-sm-1">Image file</label>
        <input type="file" class="form-control-file col-sm-3" id="cover_image" name="cover_image"
               aria-describedby="fileHelp">
    </div>
    <div class="form-group row">
        <label class="control-label col-sm-1">Sold</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="price" value="{{$item->sold}}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label>Description</label>
        <br>
        <textarea class="form-control" name="description"
                  placeholder="Description..."> {{$item->description}}</textarea>
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>

@endsection