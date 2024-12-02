<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});


Route::resources([
    'clients' => UserController::class,
]);

Route::resources([
    'role' => RoleController::class,
]);