@extends('layouts.app')
@section('content')
<div class="welcoming">
    <h3><span>Wel</span>com <span>T</span>o <span>T</span>he <span>Ho</span>me <span>O</span>f <span>Mo</span>vies</h3>
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
{{-- films and categories --}}
<div class="mydiv">
    <section>
        <article class="Myarticles">
            <div class="d-flex justify-content-between">
                <h3>Action Films</h3>
                <a class="" href="#">More &rarr;</a>
            </div>
            <div class="row">
                <div class="col-12 col-xl-3">
                    <x-movie-main-card />
                </div>
                <div class="col-12 col-xl-3 ">
                    <x-movie-main-card />
                </div>
                <div class="col-12 col-xl-3 ">
                    <x-movie-main-card />
                </div>
                <div class="col-12 col-xl-3 ">
                    <x-movie-main-card />
                </div>
        </article>
        <article class="Myarticles">
            <div class="d-flex justify-content-between">
                <h3>Action Films</h3>
                <a class="" href="#">More &rarr;</a>
            </div>
            <div class="row">
                <div class="col-12 col-xl-3">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>

        </article>
        <article class="Myarticles">
            <div class="d-flex justify-content-between">
                <h3>Action Films</h3>
                <a class="" href="#">More &rarr;</a>
            </div>
            <div class="row">
                <div class="col-12 col-xl-3">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>

        </article>
        <article class="Myarticles">
            <div class="d-flex justify-content-between">
                <h3>Action Films</h3>
                <a class="" href="#">More &rarr;</a>
            </div>
            <div class="row">
                <div class="col-12 col-xl-3">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 ">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/image1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
            </article>

    </section>
    <aside>
        <h1>Categories</h1>
            <div class="row">
                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success  mybtn">2021 Films</button></div>
                <div class="col-12 col-xl-6 "><button type="button" class="btn btn-outline-success mybtn">2020 Films</button></div>

                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>

                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Action Films</button></div>
                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Horror Films</button></div>

                <div class="w-100"></div>

                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Comedy Films</button></div>
                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Romance Films</button></div>

                <div class="w-100"></div>

                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Arabic Films</button></div>
                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Korean Films</button></div>

                <div class="w-100"></div>

                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Anime Films</button></div>
                <div class="col-12 col-xl-6"><button type="button" class="btn btn-outline-success mybtn">Cartoon Films</button></div>
            </div>
    </aside>
</div>
@endsection
