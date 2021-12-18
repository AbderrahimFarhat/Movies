<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class movies extends Model
{
    function getMovies($page)
    {
        $response = Http::get('https://api.themoviedb.org/3/discover/movie?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=' . $page . '&with_watch_monetization_types=flatrate')['results'];
        return $response;
    }
    function getMoviesByCategory($id,$page){
        $response=Http::get('https://api.themoviedb.org/3/discover/movie?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=' . $page . '&with_genres='.$id)['results'];
        return $response;
    }
    function getMostRatedMovies($page)
    {
        $response=Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&page='.$page)['results'];
        return $response;
    }
    function getMostLikedMovies($page)
    {
        $response=Http::get('https://api.themoviedb.org/3/movie/popular?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&page='.$page)['results'];
        return $response;
    }
    function getMovieByName($name)
    {
        $response = Http::get('https://api.themoviedb.org/3/search/movie?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&query=' . $name . '&page=1&include_adult=false')['results'];
        return $response;
    }
    function getMovieById($id)
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/' . $id . '?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US');
        return $response->json();
    }
    function getSimilareMovie($id)
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/' . $id . '/similar?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&page=1')['results'];
        return $response;
    }
    use HasFactory;
}
