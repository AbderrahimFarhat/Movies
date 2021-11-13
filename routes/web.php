<?php


use Illuminate\Support\Facades\Route;
use App\Models\movies;
use PhpParser\Node\Stmt\Catch_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $m = new movies();
    $page = (request('page') == Null) ? 1 : request('page');

    $movies = $m->getMovies($page);
    return view('home', array('movies' => $movies, 'page' => $page));
});

Route::get('/movie', function () {
    $m = new movies();
    if (request('id') != null || request('title') != null) {
        $movie = $m->getMovieById(request('id'));
        $similarMovies = $m->getSimilareMovie(request('id'));
        return ($movie == null) ? view('/NotFound') : view('movie', array('movie' => $movie, 'similar' => $similarMovies));
    } else {
        return view('/NotFound');
    }
});
