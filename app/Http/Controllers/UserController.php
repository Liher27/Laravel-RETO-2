<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\RoleUserController;
use Illuminate\Support\Facades\Auth;

use App\Models\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $userRoles = Auth::user()->roles->pluck('id')->toArray();  
        $users = User::orderBy('id')->cursorPaginate(env('PAGINATION_COUNT'));
        return view('user.index', [
            'users' => $users,
            'userRoles' => $userRoles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
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
        //$user->role_id = $request->role_id;
        $role = Role::find($request->role_id);
        $user->save();
        $user->roles()->attach($role);
       
        

        return redirect()->route('users.index');
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
        return view('user.edit',['user'=>$user]);
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


        
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
    public function add(User $user){

        $roles = Role::all();
        return view('user.addRole', compact('user', 'roles'));
    }

    public function delete(Request $request,User $user){

        return view('user.deleteRole',['user'=>$user]);


    }

    public function deleteRole(Request $request,User $user){

        dd($request);
        $role = Role::find($request->role_id);

        // $user->roles()->detach($role);
        // return redirect()->route('users.index');

    }

    public function addRole(Request $request, User $user){
        if ($user->roles()->count() >= 2) { 
            echo '<p>No puedes tener más roles.</p>';
        } else {
            $role = Role::find($request->role_id);
            if (!$role) {
                echo '<p>Este rol no existe.</p>';
            } else {
                if (!$user->roles()->where('id', $role->id)->exists()) {
                    $currentUserRoleId = Auth::user()->roles->pluck('id')->first();
                    if ($currentUserRoleId == 1) {
                        $user->roles()->attach($role);
                    } elseif ($currentUserRoleId == 2) {
                        if ($role->id != 1) {
                            if ($user->roles()->where('id', 1)->exists()) {
                                echo '<p>Error: No puedes asignar roles a usuarios del grupo 1.</p>';
                            } else {
                                $user->roles()->attach($role);
                            }
                        } else {
                            echo '<p>Error: No puedes asignar roles god a este usuario.</p>';
                        }
                    } else {
                        echo '<p>No tienes permiso para añadir roles.</p>';
                    }
                } else {
                    echo '<p>Este rol ya ha sido asignado.</p>';
                }
            }
            return redirect()->route('users.index');
        }
    }
}
