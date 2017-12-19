@extends('layouts.app')


@section('content')
    <h1 style="text-align: center">Coming soon</h1>

    <h2>Items</h2>
    <div class="container-fluid">
        @if(count($items)> 0)
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </table>
        @endif
    </div>
@endsection()