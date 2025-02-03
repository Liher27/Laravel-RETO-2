<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            return response()->json(['error' => 'user_subject not found'], 400);
        }
    
        return response()->json([
            $user_subject,
        ]);
    }

    public function modificarReunion($id, $estado, Request $request)
    {
        $userRole = $request->user()->roles->pluck('id')->toArray();

        if(in_array(3, $userRole) || in_array(4, $userRole)){
            return response()->json(['error' => 'Unauthorized'], 403);
        }
        else if($estado != 'Aceptada' && $estado != 'Rechazada' && $estado != 'Pendiente'){
            return response()->json(['error' => 'Estado no valido'], 400);
        }

        $reunion = Reunion::find($id);
        $reunion->reunionStatus = $estado;
        $reunion->save();
        return response()->json([
            'message' => 'Reunion modificada',
            
        ], 200);
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
            ], 201);
        }
        else
            return response()->json(['error' => 'Unauthorized'], 403);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    
        return response()->json(['message' => 'Logged out successfully'])->setStatusCode(201);
    }

    public function version2(){
        return response()->json(['Bienvenido a la version 2 de la API de ElorAdmin!'])->setStatusCode(200);
    }
}
