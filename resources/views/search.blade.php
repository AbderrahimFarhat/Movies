@extends('layouts.app')
@section('content')
    <div class="movies">
        <div class="card-container">
            {{-- {{ddd($movies)}} --}}
            @foreach ($movies as $movie)
                <x-movie-main-card :movie="$movie" />
            @endforeach
        </div>
    </div>
@endsection