@extends('layouts.app')
@section('content')

<div class="container">
    <div class="welcoming">
        <a class="logo" href="#"><span>A</span>by<span>F</span>ilms</a>
        <div class="title">
            <h3><span>Wel</span>come <span>T</span>o <span>T</span>he <span>Ho</span>me <span>O</span>f <span>Mo</span>vies</h3>
        </div>
<<<<<<< HEAD
        <form class="d-flex" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2"  type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-search" type="submit">Search</button>
=======
        <form class="d-flex gap-2" >
            <div class="">
                <input class="form-control me-2" id="search-input" type="search" placeholder="Search" aria-label="Search">
                <div class="movie-search-holder">
                </div>
            </div>
            <button class="btn btn-search align-self-baseline" type="submit">Search</button>
>>>>>>> searchComp
        </form>
    </div>
</div>
{{-- Crousel Images --}}
<div class="mycontainer">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Action.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/av.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/cp.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
{{--   movies --}}
<div class="container">
    <div class="filter d-md-flex">
        <div class="by-film-type flex-grow-1">
            <h5 class="section-title">Advanced Filter</h5>
            <div>
                <select name="category" onchange="location = this.value;">
                    <option value="/category?id=28">Action</option>
                    <option value="/category?id=18">Drama</option>
                    <option value="/category?id=35">Comedy</option>
                    <option value="/category?id=878">Sci-fi</option>
                </select>
                <select name="year">
                    <option value="year" disabled selected>Year</option>
                    @for ($i = 0; $i < 22; $i++)
                        <option value="{{2000+$i}}">{{2000 + $i}}</option>
                    @endfor
                </select>
                <select name="Quality">
                    <option value="quality" disabled selected>Quality</option>
                    <option value="bluray">BluRay</option>
                    <option value="webdl">WEB-DL</option>
                    <option value="webrip">WEB-RIP</option>
                    <option value="hdtv">HDTV</option>
                </select>
            </div>
        </div>
        <div class="by-public d-flex justify-content-around align-items-center flex-grow-1">
            <a href="#">
                <img src="icons/team.png" alt="">
                <span>Most Views</span>
            </a>
            <a href="/mostLiked">
                <img src="icons/heart.png" alt="">
                <span>Most Liked</span>
            </a>
            <a href="/mostrated">
                <img src="icons/star.png" alt="">
                <span>Most Rated</span>
            </a>
        </div>
    </div>
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
                <li class={{($i==$page)?'active':''}}><a href="/?page={{$i}}">{{$i}}</a></li>
            @endfor
        </ul>
    </div>
</div>

@endsection
