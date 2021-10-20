@extends('layouts.app')
@section('content')
<div class="container">
    <div class="welcoming">
        <a class="logo" href="#"><span>A</span>by<span>F</span>ilms</a>
        <div class="title">
            <h3><span>Wel</span>come <span>T</span>o <span>T</span>he <span>Ho</span>me <span>O</span>f <span>Mo</span>vies</h3>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-search" type="submit">Search</button>
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
                <select name="category">
                    <option value="cateory" disabled selected>Category</option>
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="comedy">Comedy</option>
                    <option value="sci-fi">Sci-fi</option>
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
            <a href="#">
                <img src="icons/heart.png" alt="">
                <span>Most Liked</span>
            </a>
            <a href="#">
                <img src="icons/star.png" alt="">
                <span>Most Rated</span>
            </a>
        </div>
    </div>
    <div class="movies">
        <h5 class="section-title">Latest Movies</h5>
        <div class="card-container">
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
            <x-movie-main-card />
        </div>
    </div>
    <div class="pagination">
        <ul>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            
        </ul>
    </div>
</div>

@endsection
