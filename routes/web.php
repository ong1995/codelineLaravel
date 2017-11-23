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
    return view('welcome');
});

Route::get('/films/{id}', 'FilmController@show');
Route::get('/films', 'FilmController@getFilmList');
	
Route::get('/createfilms', function () {
    return view('layouts.createFilm');
});

// Route::get('/registration', function () {
//     return view('layouts.registration');
// });


Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');