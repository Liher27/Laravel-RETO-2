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
        $user = Auth::user();
        $role_id = $user->getRoleID();
 
    
        if($role_id == 1 || $role_id == 2)
            return view('admin.show',['user'=>$user]);
        else
            return view('home',['user'=>$user]);
    }

    public function god()
    {
        return "IiI";
    }
}
