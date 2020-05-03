<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{

	public function getDashboard()
	{
		$posts =Post::orderBy('created_at', 'desc')->get();
		return view('trending')->with('posts', $posts);

	}

	public function postCreatePost(Request $request)
	{
		//validation
		$this->validate($request, [
		'body' => 'required|max:1000'
		]);
		$post = new Post();
		$post->body = $request['body'];
		$message = 'You must log-in before you post comments!';
		if ($request->user()->posts()->save($post)){
			$message = 'Thanks for contributing!';
		}
		return redirect()->route('trending')->with(['message' => $message]);
	}







}

