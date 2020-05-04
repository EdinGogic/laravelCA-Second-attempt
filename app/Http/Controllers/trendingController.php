<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trendingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		$posts = Post::get();
		print_r($post);
		return view('trending');

    }

	public function create()
	{
		return view('layouts.create');
	}

}
