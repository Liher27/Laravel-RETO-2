<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::resources([
        'users' => UserController::class,
    ]);
    Route::resources([
        'roles' => RoleController::class,
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
<<<<<<< HEAD
        'professor' => HomeController::class,
=======
        'courses' => CourseController::class,
>>>>>>> ebd86c7dafc99119c7e0dfe1a833f536d2a4499e
    ]);

    Route::get('/settings')->middleware(HomeController::class);
});