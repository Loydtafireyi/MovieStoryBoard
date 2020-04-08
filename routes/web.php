<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MoviesController@index')->name('movie.index');
Route::get('/movie/{movie}', 'MoviesController@show')->name('movie.show');
