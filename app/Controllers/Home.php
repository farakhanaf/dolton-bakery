<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('dolton_welcome');
	}

	public function about()
	{
		return view('about');
	}

	public function shop()
	{
		return view('shop');
	}

	public function blog()
	{
		return view('blog');
	}

	public function contact()
	{
		return view('contact');
	}
}
