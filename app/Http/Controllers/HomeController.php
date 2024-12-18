<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

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
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next) {
        if (Auth::check() && Auth::user()->role_id == 1) {
            return response()->view('god.index');
        }

        if (Auth::check() && Auth::user()->role_id == 2) {
            return response()->view('admin.index');
        }

        if (Auth::check() && Auth::user()->role_id == 3) {
            return response()->view('professor.index');
        }

        if (Auth::check() && Auth::user()->role_id >= 4) {
            return redirect('/');
        }

        return $next($request);
    }
}