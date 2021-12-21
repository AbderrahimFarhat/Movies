<?php


use Illuminate\Support\Facades\Route;
use App\Models\movies;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

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
Route::get('/category', function () {
    $m = new movies();
    $page = (request('page') == Null) ? 1 : request('page');

    $movies = $m->getMoviesByCategory(request('id'),$page);
    return view('categorie', array('movies' => $movies, 'page' => $page));
});
Route::get('/mostrated', function () {
    $m = new movies();
    $page = (request('page') == Null) ? 1 : request('page');

    $movies = $m->getMostRatedMovies($page);
    return view('mostRated', array('movies' => $movies, 'page' => $page));
});
Route::get('/mostLiked', function () {
    $m = new movies();
    $page = (request('page') == Null) ? 1 : request('page');

    $movies = $m->getMostLikedMovies($page);
    return view('mostLiked', array('movies' => $movies, 'page' => $page));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
