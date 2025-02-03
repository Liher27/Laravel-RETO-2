<?php

namespace App\Http\Controllers;

use App\Models\Role_User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role_User = user_subject::orderBy('user_id')->paginate($PAGINATION_COUNT);
        return view('role_user.index',['role_users' => $role_users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,User $user)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);
        $user = User::findOrFail($userId);
        $role = Role::find($request->role_id);
        $user->roles()->attach($role);
        return redirect()->back()->with('El rol ha sido añadido!');
     
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Role_User $role_User)
    {
        return view(view: 'role.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role_User $role_User)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role_User $role_User)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role_User $role_User)
    {
        $role_User->delete();
        return redirect()->route('users.index');
        
    }
}
