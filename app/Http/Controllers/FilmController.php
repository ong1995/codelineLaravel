<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Resources\Film as FilmResource;
use Illuminate\Http\Request;

class FilmController extends Controller
{
	public function show($id)
	{

		$data =  new FilmResource(Film::find($id));
		return view('layouts.films',  ['data' => $data]);
	}
}
