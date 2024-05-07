@extends('layouts.app')



@section('content')
    <div class="container">

        <h1>List</h1>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <h2>{{ $comic['title'] }}</h2>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <p> {{ $comic['price'] }}</p>
                    <p> {{ $comic['series'] }}</p>
                    <p> {{ $comic['sale_date'] }}</p>
                    <p>{{ $comic['type'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
