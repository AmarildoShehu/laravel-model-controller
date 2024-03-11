@extends('layouts.app')

@section('title', 'Elenco dei Film')

@section('content')
    <div class="d-flex flex-wrap">
        @foreach($movies as $movie)
            <div class="card m-2" style="width: 18rem; background-color: #000; color: #fff;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
