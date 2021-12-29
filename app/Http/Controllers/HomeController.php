<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $m = new movies();
        $page = (request('page') == Null) ? 1 : request('page');
        $movies = $m->getMovies($page);
        return view('home', array('movies' => $movies, 'page' => $page));
    }
    public function movie()
    {
        $m = new movies();
        if (request('id') != null || request('title') != null) {
            $movie = $m->getMovieById(request('id'));
            $similarMovies = $m->getSimilareMovie(request('id'));
            return ($movie == null) ? view('/NotFound') : view('movie', array('movie' => $movie, 'similar' => $similarMovies));
        } else {
            return view('/NotFound');
        }
    }
    public function search(Request $request){
        $search=$request->input('search');
        $m= new movies();
        $movies=$m->getMovieByName($search);
        return ($movies == null) ? view('/NotFound') : view('search', array('movies' => $movies));
    }
    public function category(){
        $m = new movies();
        $page = (request('page') == Null) ? 1 : request('page');
        $movies = $m->getMoviesByCategory(request('id'), $page);
        return view('categorie', array('movies' => $movies, 'page' => $page));
    }
    public function mostrated(){
        $m = new movies();
        $page = (request('page') == Null) ? 1 : request('page');
        $movies = $m->getMostRatedMovies($page);
        return view('mostRated', array('movies' => $movies, 'page' => $page));
    }
    public function mostLiked(){
        $m = new movies();
        $page = (request('page') == Null) ? 1 : request('page');
        $movies = $m->getMostLikedMovies($page);
        return view('mostLiked', array('movies' => $movies, 'page' => $page));
    }
}
