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
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/films/create', function () {
    return view('films.createFilm');
})->name('create');

Route::get('/films/{slug}', 'FilmController@show')->name('film');
Route::get('/films', 'FilmController@getFilmList')->name('films');

Route::post('/createFilms', 'CreateFilmController@store');	

Route::post('films/comment', 'CommentController@postComment');

/* Registration */ 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
