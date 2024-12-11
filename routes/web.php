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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
