@extends('layouts.app')

@section('title', 'Elenco dei Film')

@section('content')
    <div class="container">
        <h1 class="card-title">Elenco dei Film</h1>
        <div class="card">
            <div class="card-body">
                @foreach($movies as $movie)
                    <div class="mb-3">
                        <h5 class="card-title">
                            <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-secondary">{{ $movie->original_title }}</h6>
                        <p class="card-text">{{ $movie->nationality }}</p>
                        <p class="card-text">Voto: {{ $movie->vote }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

