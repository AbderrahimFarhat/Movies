<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/search',[HomeController::class,'search'])->name('search');
Route::get('/movie',[HomeController::class,'movie'])->name('movie');
Route::get('/category',[HomeController::class,'category'])->name('category');
Route::get('/mostrated',[HomeController::class,'mostrated'])->name('mostrated');
Route::get('/mostLiked',[HomeController::class,'mostLiked'])->name('mostLiked');
Auth::routes();

