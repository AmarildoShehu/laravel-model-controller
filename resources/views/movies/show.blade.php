@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <h6 class="card-subtitle mb-2 text-secondary">{{ $movie->original_title }}</h6>
                <p class="card-text">{{ $movie->nationality }}</p>
                <p class="card-text">Voto: {{ $movie->vote }}</p>
                <a href="{{ route('movies.index') }}" class="btn btn-primary">Torna alla lista dei film</a>
            </div>
        </div>
    </div>
@endsection