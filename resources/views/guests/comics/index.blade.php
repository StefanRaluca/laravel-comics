@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white text-center mb-3">Current Series</h1>
        <div class="row">
            @foreach ($comics as $id => $comic)
                <div class="col-md-2 mb-4">
                    <a href="{{ route('comic.show', ['id' => $id]) }}" class="text-decoration-none text-white">
                        <div class="card border-0 rounded-0">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                            <h6 class="text-center">{{ $comic['title'] }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
