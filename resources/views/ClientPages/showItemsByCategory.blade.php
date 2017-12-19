@extends('layouts.app')

@section('content')
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="item  col-xs-8 col-lg-4">
                <div class="thumbnail">
                    <a href="{{route('user.items.show', $item->id)}}">
                        @if($item->cover_image=="")
                            <img class="group list-group-image"
                                 src="http://placehold.it/400x250/000/fff" alt="" style="height: 250px; width: 400px"/>
                        @else
                            <img class="group list-group-image"
                                 src="{{asset("storage/cover_images/$item->cover_image")}}"
                                 style="height: 250px; width: 400px">
                        @endif
                    </a>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading" style="word-break: break-all">
                            {{str_limit($item->name,35,"...")}}</h4>
                        <p>Category: {{$item->category->name}}</p>
                        <p class="group inner list-group-item-text">
                            {{str_limit($item->description,40,"...")}}</p>
                        <div class="row">
                            <div class="col-xs-13 col-md-7">
                                <p class="lead">
                                    {{ number_format($item->price, 2) }}€
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h3 class="text-center">There are no items in this category</h3>
    @endif
@endsection