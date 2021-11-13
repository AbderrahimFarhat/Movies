@extends('layouts.app')
@section('content')
{{-- card component for a movies --}}
<div class="container">
    <x-movie-card class="mb-5 mt-5" :movie="$movie"/>
    <h1>Similar Movie</h1>
    <div class="episodes">
        @foreach ($similar as $s)
            <x-movie-main-card :movie="$s"/> 
        @endforeach
    </div>
</div>
    

@endsection