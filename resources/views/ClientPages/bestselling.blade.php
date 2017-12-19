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
                                 src="{{asset("storage/cover_images/$item->cover_image")}}" style="height: 250px; width: 400px">
                        @endif
                    </a>
                    <div class="caption">
                        <h3 class="group inner list-group-item-heading" style="word-break: break-all">
                            {{$item->name}}</h3>
                        <p>Sold: {{$item->sold}}</p>
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
        {{$items->links()}}
    @else
        <h3>Store seems to be empty</h3>
    @endif
@endsection