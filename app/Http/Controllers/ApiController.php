<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user_subject;
use App\Models\Reunion;

class ApiController extends Controller
{

    public function index()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function getHorario($id)
    {
        $user_subject = user_subject::where('profesor_id', $id)->get();

        if (!$user_subject) {
            return response()->json(['error' => 'user_subject not found'], 404);
        }
    
        return response()->json([
            $user_subject,
        ]);
    }

    public function modificarReunion($id, $estado, Request $request)
    {
        $userRole = $request->user()->roles->pluck('id')->toArray();

        if(in_array(3, $userRole) || in_array(4, $userRole)){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        else if($estado != 'Aceptada' && $estado != 'Rechazada' && $estado != 'Pendiente'){
            return response()->json(['error' => 'Estado no valido'], 401);
        }

        $reunion = Reunion::find($id);
        $reunion->reunionStatus = $estado;
        $reunion->save();
        return response()->json([
            'message' => 'Reunion modificada',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user,
            ]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    
        return response()->json(['message' => 'Logged out successfully']);
    }
}
