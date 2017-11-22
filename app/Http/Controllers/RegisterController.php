<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{

	public function create()
	{
		return view('layouts.registration');
	}

	public function store()
	{

		// dd(request());
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required'
			]);

		$user = User::create(request(['name', 'email', 'password']));

		auth()->login($user);

		return redirect()->to('/createfilms');
	}
}
