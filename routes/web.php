<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});


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
    'userSubjects' => StudentCoursesController::class,
]);
Route::resources([
    'roles' => RoleController::class,
]);