@extends('layouts.app')

@section('content')
    <a href="{{route('users.index')}}" id="AdminCategory" class="btn btn-default col-xs-6 col-md-4">
        <label class="centras">Users</label>
    </a>
    <a href="admin/suppliers" id="AdminCategory" class="btn btn-default col-xs-6 col-md-4">
        <label class="centras">Suppliers</label>
    </a>
    <a href="{{route('items.index')}}" id="AdminCategory" class="btn btn-default col-xs-6 col-md-4">
        <label class="centras">Items</label>
    </a>
@endsection