<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Resources\Film as FilmResource;
use Illuminate\Http\Request;

class FilmController extends Controller
{
   public function show($id)
   {
   		return new FilmResource(Film::find($id));
   }
}
