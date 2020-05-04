<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\OrderDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users =User::orderBy('created_at', 'desc')->get();
        return view('home')->with('users', $users);


    }
	public function test()
	{
		return view ('testhome');
	}

    public function orders()
    {
        $orders =OrderDetail::get();
        return view('layouts.orders')->with('orders', $orders);
    }

    public function welcome()
    {
        return view('welcome');
    }


}
