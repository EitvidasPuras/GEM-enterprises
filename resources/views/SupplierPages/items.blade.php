@extends('layouts.app')

@section('content')
    <a href="./" class="btn btn-default">Go back</a>
    <h1>Products</h1>
    <div class="container">
        <div align="right">
            <a href="{{route('supplier.items.create')}}" class="btn btn-primary">Add new product</a>
            <p></p>
        </div>
        @if(count($items)> 0)
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($items as $item)
                    <tr class="btn-default">
                        <th>{{$item->id}}</th>
                        <th>{{$item->name}}</th>
                        <th><?php
                            echo number_format((float)$item->price, 2, '.', ''), " €";
                            ?>
                        </th>
                        <th>{{$item->amount}}</th>
                        <th>{{$item->categoryName()}}</th>
                        <th>
                            <a href="{{route('supplier.items.edit',$item->id)}}" class="btn btn-success">Edit</a>
                        </th>
                        <th>
                            <button type="button" name="delete" class="btn btn-danger" value="remove"
                                    data-toggle="modal" data-target="#u{{$item->id}}">Remove
                            </button>
                        </th>
                    </tr>
                    <tr></tr>

                @endforeach
            </table>
            @foreach($items as $item)
                <div class="modal fade" id="u{{$item->id}}" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <p>Do you want to remove '{{$item->name}}'?</p>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    {!! Form::open(['action'=>['SupplierItemsController@destroy',$item->id],'method'=>'POST']) !!}
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

            {{$items->links()}}
        @else
            <p>No Users Found</p>
        @endif
    </div>
@endsection