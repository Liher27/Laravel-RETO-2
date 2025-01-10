<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RoleUserController;
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
        'courses' => CourseController::class,
    ]);
    Route::resources([
        'role_users' => RoleUserController::class,
    ]);

    Route::get('/settings')->middleware(HomeController::class);

    Route::post('/users/{user}/add-role', [UserController::class, 'addRole'])->name('users.add-role');
});