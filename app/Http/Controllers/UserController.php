<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('id')->cursorPaginate(env('PAGINATION_COUNT'));
        return view('user.index',['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->direction = $request->direction;
        $user->DNI = $request->DNI;
        $user->Telephone = $request->Telephone;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->direction = $request->direction;
        $user->DNI = $request->DNI;
        $user->Telephone = $request->Telephone;
        $user->role_id = $request->role_id;
        $user->save();
        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $reunion->delete();
        return redirect()->route('users.index');
    }
}
