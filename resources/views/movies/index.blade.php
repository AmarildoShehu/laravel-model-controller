@extends('layouts.app')

@section('title', 'Elenco dei Film')

@section('content')
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $movie->poster }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection