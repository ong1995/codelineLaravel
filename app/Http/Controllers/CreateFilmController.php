<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class CreateFilmController extends Controller
{
	public function store(Request $request)
	{
		// store the upload image in public/image 
		// if($request->file('photo')){
		// 	$filename = $request->file('photo')->getClientOriginalName();
		// 	$request->file('photo')->storeAs('storage/public', $filename);
		// }
		// dd($request);

		$film = Film::create([
			'name' => $request->name,
			'slug' => Str::slug($request->name, '-'),
			'description' => $request->desc,
			'release_date' => $request->date,
			'rating' => $request->rating,
			'ticket_price' => $request->ticket,
			'country' => $request->country,
			'genre' => $request->genre,
			'photo' => $request->file('photo')->getClientOriginalName()
			]);		

		return $request->name;



	}
}
