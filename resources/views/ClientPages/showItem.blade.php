@extends('layouts.app')

@section('content')
    <h1 class="padding">{{$item->name}}</h1>
    <div class="item">

        <div class="col-md-5 col-sm-5">
        <img class="showItem img-rounded" src="http://placehold.it/400x250/000/fff" alt=""/>
        </div>
        <div class="col-md-7 col-sm-7">
            <h4 class="text-center">{{$item->description}}</h4>
            <hr>
            <h3>
                {{ number_format($item->price, 2) }}€
            </h3>
            <h4>
                Category: {{$item->category->name}}
            </h4>
            <h4>
                In stock: {{$item->amount}}
            </h4>
            <h4>
                Sold: {{$item->sold}}
            </h4>

            <div>
                <div class="star-rating">

                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                </div>
                @if(Auth::check())
                    <a style="float: right" class="btn btn-success" href="">Add to cart</a>
                @endif
            </div>
        </div>
    </div>



@endsection