@extends('layouts.app')
@section('content')
    <div class="movies">
        <h5 class="section-title">Latest Movies</h5>
        <div class="card-container">
            {{-- {{ddd($movies)}} --}}
            @foreach ($movies as $movie)
                <x-movie-main-card :movie="$movie" />
            @endforeach
        </div>
    </div>
    <div class="pagination">
        <ul>
            @for ($i = 1; $i <= 5; $i++)
                <li class={{ $i == $page ? 'active' : '' }}><a href="/category?page={{ $i }}">{{ $i }}</a></li>
            @endfor
        </ul>
    </div>
@endsection
