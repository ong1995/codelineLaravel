<?php

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
    return view('authentication.login');
});

Route::get('/films/create', function () {
    return view('layouts.createFilm');
});

Route::get('/films/{slug}', 'FilmController@show')->name('film');
Route::get('/films', 'FilmController@getFilmList');

Route::post('/createFilms', 'CreateFilmController@store');	

/* Registration */ 
Route::get('/register', 'RegisterController@create')->name('registration');
Route::post('/register', 'RegisterController@store');	