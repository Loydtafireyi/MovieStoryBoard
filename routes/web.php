<?php

use Illuminate\Support\Facades\Route;

// Api Controllers
Route::get('/', 'ApiMoviesController@index')->name('movie.index');
Route::get('/movie/{movie}', 'ApiMoviesController@show')->name('movie.show');

// Auth routes
Auth::routes();
Route::get('login/google/', 'Auth\LoginController@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

// Local Controllers
Route::get('/home', 'HomeController@index')->name('home');
