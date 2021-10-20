@extends('layouts.app')
@section('content')
{{-- card component for a movies --}}
<div class="container">
    <x-movie-card class="mb-5 mt-5"/>
    <h1>Episodes</h1>
    <div class="episodes">
        <x-movie-main-card />
        <x-movie-main-card />
        <x-movie-main-card />
        <x-movie-main-card />
        <x-movie-main-card />
        <x-movie-main-card />
    </div>
</div>
    

@endsection