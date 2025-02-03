<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiController;

Route::get('/v1/horario/{id}', [ApiController::class, 'getHorario']);

Route::post('/v1/token', [ApiController::class, 'login']);

Route::get('/v2/horario', [ApiController::class, 'version2']);

Route::post('/v1/logout', [ApiController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/v1/modificarReunion/{id}/{estado}', [ApiController::class, 'modificarReunion'])
    ->middleware('auth:sanctum');