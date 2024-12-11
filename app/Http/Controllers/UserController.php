<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('id')->get();
        return view('user.index',['user' => $user]);
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
    public function update(Request $request, Reunion $reunion)
    {
        $reunion->name = $request->name;
        $reunion->email = $request->email;
        $reunion->email_verified_at = $request->email_verified_at;
        $reunion->password = $request->password;
        $reunion->direction = $request->direction;
        $reunion->DNI = $request->DNI;
        $reunion->Telephone = $request->Telephones;
        $reunion->role_id = $request->role_id;
        $reunion->save();
        
        return view('reunions.show',['reunion'=>$reunion]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reunion $reunion)
    {
        $reunion->delete();
        return redirect()->route('reunions.index');
    }
}
