@extends('layouts.app')

@section('content')
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="item  col-xs-8 col-lg-4">
                <div class="thumbnail">
                    <a href="/items/{{$item->id}}"><img class="group list-group-image"
                                                        src="http://placehold.it/400x250/000/fff" alt=""/></a>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            {{$item->name}}</h4>
                        <p>Category: {{$item->category->name}}</p>
                        <p class="group inner list-group-item-text">
                            {{$item->description}}</p>
                        <div class="row">
                            <div class="col-xs-13 col-md-7">
                                <p class="lead">
                                    <?php
                                    echo number_format((float)$item->price, 2, '.', ''), "€";
                                    ?>
                                </p>
                            </div>
                            @if(Auth::check())
                                <div class="col-xs-5 col-md-2">
                                    <a class="btn btn-success" href="">Add to cart</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h3 class="text-center">There are no items in this category</h3>
    @endif
@endsection