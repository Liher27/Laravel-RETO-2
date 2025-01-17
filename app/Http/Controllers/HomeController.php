<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use App\Models\Role;
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
    public function handle(Request $request)
    
    {
            $registrations = Registration::orderBy('id')->cursorPaginate(env('PAGINATION_COUNT'));
            $roles = Role::where('id', '<=', 3)->get();      
            $user_roles = Auth::user()->roles->pluck('id')->toArray();
            $count = \App\Models\Registration::count();

                if(in_array(1, $user_roles))
                return view('god.index', [
                    'registrations' =>$registrations,
                    'count' =>$count,
                    'roles' =>$roles,
                ]);
                else if(in_array(2, $user_roles))
                    return view('admin.index');
                else if(in_array(3, $user_roles))
                    return view('professor.index');
                else
                    return redirect('/');
    }
}
