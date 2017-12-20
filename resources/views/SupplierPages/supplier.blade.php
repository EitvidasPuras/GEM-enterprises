@extends('layouts.app')

@section('content')
    <a href="{{route('supplier_profile')}}" id="AdminCategory" class="btn btn-default col-xs-6 col-md-4">
        <label class="centras">Profile</label>
    </a>
    <a href="{{route('supplier.items.index')}}" id="AdminCategory" class="btn btn-default col-xs-6 col-md-4">
        <label class="centras">Items</label>
    </a>
    <a href="{{route('supplier_message')}}" id="AdminCategory" class="btn btn-default col-xs-6 col-md-4">
        <label class="centras">Send message</label>
    </a>
@endsection