<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class ApiMoviesController extends Controller
{
    public function index()
    {
    	$popularMovies = Http::withToken(env('MOVIE_DB_TOKEN'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];

        $nowPlayingMovies = Http::withToken(env('MOVIE_DB_TOKEN'))->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];

    	$genresArray = Http::withToken(env('MOVIE_DB_TOKEN'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function($genre) {
            return[$genre['id'] => $genre['name']];
        });

    	return view('index', compact('popularMovies', 'genres', 'nowPlayingMovies'));
    }

     public function show($id)
    {
        $movie = Http::withToken(env('MOVIE_DB_TOKEN'))->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();

    	return view('show', compact('movie'));
    }
}
