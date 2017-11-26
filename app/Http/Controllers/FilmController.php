<?php

namespace App\Http\Controllers;

use App\Film;
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
		return view('films.films',  ['data' => $data]);
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
