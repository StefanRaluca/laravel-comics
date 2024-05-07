@extends('layouts.app')



@section('content')
    <div class="container">
        <h1 class="text-white text-center mb-3">Current Series</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-md-2 mb-4 ">
                    <div class="card  border border-0 rounded-0 bg-dark">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <h6 class="text-center text-white">{{ $comic['title'] }}</h6>
                    </div>
                </div>
            @endforeach
        @endsection
