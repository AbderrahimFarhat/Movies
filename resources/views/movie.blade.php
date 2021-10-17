@extends('layouts.app')
@section('content')
{{-- card component for a movies --}}
    <x-movie-card />
{{-- imbeded link for the movie --}}
    <div class="container">
        <iframe width="100%" height="600" src="https://www.youtube.com/embed/-FmWuCgJmxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

@endsection