<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
public function redirectTo()
{
    $user_roles = Auth::user()->roles->pluck('id')->toArray();

    // Check the user's role and redirect accordingly
    if (in_array(1, $user_roles)) {
        return view ('god.index'); // Redirect to the god's settings page
    } elseif (in_array(2, $user_roles)) {
        return '/admin/settings'; // Redirect to the admin's settings page
    } elseif (in_array(3, $user_roles)) {
        return '/professor/settings'; // Redirect to the professor's settings page
    }

    // Default redirect (in case no roles are found)
    return '/';
}


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}