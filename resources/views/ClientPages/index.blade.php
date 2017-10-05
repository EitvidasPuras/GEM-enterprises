@extends('layouts.app')
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
</body>
</html>

@section('content')
    @if(count($items) > 0)
        @foreach($items as $item)
                <div class="item  col-xs-8 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                {{$item->name}}</h4>
                            <p class="group inner list-group-item-text">
                                description</p>
                            <div class="row">
                                <div class="col-xs-13 col-md-7">
                                    <p class="lead">
                                        <?php
                                        echo number_format((float)$item->price, 2, '.', ''), "€";
                                        ?>
                                    </p>
                                </div>
                                <div class="col-xs-5 col-md-2">
                                    <a class="btn btn-success" href="">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    @else
        <h3>Store seems to be empty</h3>
    @endif
@endsection