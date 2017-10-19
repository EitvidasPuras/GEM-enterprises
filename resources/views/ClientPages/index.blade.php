@extends('layouts.app')

@section('content')

    <form action="{{route("search")}}">
        {{csrf_field()}}
        <div style="margin-bottom: 16px" class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" name="q"
                                   placeholder="Search for products by their name, description or price"/>
                            <span class="input-group-btn">
                        <button style="background-color: black" class="btn btn-lg" type="submit">
                            <i style="color: white" class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="item  col-xs-8 col-lg-4">
                <div class="thumbnail">
                    <a href="/items/{{$item->id}}"><img class="group list-group-image"
                                                        src="http://placehold.it/400x250/000/fff" alt=""/></a>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            {{$item->name}}</h4>
                        <p class="group inner list-group-item-text">
                            {{$item->description}}</p>
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
        <h3 class="text-center">Store seems to be empty</h3>
    @endif
@endsection