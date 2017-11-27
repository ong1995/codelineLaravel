<?php

namespace App\Http\Controllers;

use App\Film;
use App\Comment;
use Carbon\Carbon;
use App\Http\Resources\Film as FilmResource;
use Illuminate\Http\Request;


class FilmController extends Controller
{
	public function show($slug)
	{
		$data =  new FilmResource(Film::where('slug', $slug)->first());
		$date = new Carbon($data->releaseDate);
		$data['release_date'] = $date->year;	

		$data['release_date'] = self::yearOnly($data->releaseDate);  

		$comments  = Comment::where('film_id', $data->id)->orderBy('created_at', 'desc')->get();
		return view('films.films',  ['data' => $data, 
							'comments' => $comments
						]);
		
	}

	public function getFilmList()
	{
		$data = new FilmResource(Film::all());
		$item = array();
		foreach ($data as $key) {
			$index = 0;
			foreach ($key as $value) {
				$data[$index++]['release_date'] = self::yearOnly($value->releaseDate);
			} 
		}
		return view('films.filmlist',  ['data' => $data]);
	}

	static function yearOnly($releaseDate)
	{
		$date = new Carbon($releaseDate);
		return $date->year;   
	}
}
