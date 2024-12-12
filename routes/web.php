<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;


Auth::routes();

Route::get('/', function () {
    return view('/auth/login');
});

Route::resources([
    'users' => UserController::class,
]);

Route::resources([
    'registrations' => RegistrationController::class,

]);
Route::resources([
    'subjects' => SubjectController::class,
]);

Route::resources([
    'userSubjects' => UserSubjectController::class,
]);

Route::resources([
    'roles' => RoleController::class,
]);