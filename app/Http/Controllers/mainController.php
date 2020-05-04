<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {

        $users =User::orderBy('created_at', 'desc')->get();
        return view('home')->with('users', $users);

    }

    public function count()
    {
        $count = User::count();
        return view('layouts.admin')->with(['total'=>$count]);
    }



}
