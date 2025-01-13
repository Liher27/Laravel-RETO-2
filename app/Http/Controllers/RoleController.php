<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $roles = Role::orderBy('id')->cursorPaginate(env('PAGINATION_COUNT'));
        $userRoles = Auth::user()->roles->pluck('id')->toArray(); 
        if ($request->expectsJson()) {
            return response()->json($roles, $userRoles);
        } else {
            return view('roles.index', [
                'roles' => $roles,
                'userRoles' => $userRoles
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->role_name = $request->role_name;
        $role->save();
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.show',['role'=>$role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit',['role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->role_name = $request->role_name;
        $role->save();
        return view('roles.show',['role'=>$role]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
