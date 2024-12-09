<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});


Route::resources([
    'users' => UserController::class,
]);

Route::resources([
    'roles' => RoleController::class,
]);

Route::resources([
    'subjects' => SubjectController::class
]);