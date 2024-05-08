@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <h1>{{ $comic['title'] }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>{{ $comic['description'] }}</p>
                        <p>Price: {{ $comic['price'] }}</p>
                        <p>Series: {{ $comic['series'] }}</p>
                        <p>Sale Date: {{ $comic['sale_date'] }}</p>
                        <p>Type: {{ $comic['type'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
