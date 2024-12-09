<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserSubjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources(['clients' => UserController::class,]);

Route::resources([
    'users' => UserController::class,
]);

Route::resources([
    'registration' => RegistrationController::class,
]);

Route::resources([
    'subjets' => SubjectController::class,
]);

Route::resources([
    'userSubjects' => UserSubjectController::class,
]);

Route::resources([
    'roles' => RoleController::class,
]);
