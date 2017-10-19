@extends('layouts.app')

@section('content')
    @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="well">
                <a href="{{route('categories.show', $category->id)}}"><h1>{{$category->name}}</h1></a>
            </div>
        @endforeach
    @else
        <h1>No categories found</h1>
    @endif
@endsection