@extends('layouts.app')



@section('content')
    <div class="container">
        @foreach ($comics as $key => $comicsType)
        @endforeach
        <h1>List</h1>
        <ul>
            @foreach ($comicsType as $comic)
                <li>
                    <h2>{{ $comic['title'] }}</h2>
                    <p>{{ $comic['description'] }}</p>
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
