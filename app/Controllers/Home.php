<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Home');
	}

	public function journey()
	{
		return view('JourneyNew');
	}

	public function secret()
	{
		return view('Testing');
	}
}
