<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->getRoleID()>3)
            return view('home');
    }
    public function admin(){
        if(Auth::user()->getRoleID() == 2)
            return view('admin');
        else
            return view('home');
    }
    public function professor(){
        if(Auth::user()->getRoleID() == 3)
            return view('professor.index');
        else
            return view('home');
    }
    public function god(){
        if(Auth::user()->getRoleID()==1)
          return view('god');  
        else
            return view('home');
    }

}