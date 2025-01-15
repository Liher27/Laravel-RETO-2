<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

Route::get('/horario/{id}', [ApiController::class, 'getHorario']);

Route::post('/token', [ApiController::class, 'login']);

Route::post('/logout', [ApiController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/modificarReunion/{id}/{estado}', [ApiController::class, 'modificarReunion'])
    ->middleware('auth:sanctum');