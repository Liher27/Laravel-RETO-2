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
        'admins' => AdminController::class,
    ]);
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

    Route::get('/settings')->middleware(HomeController::class);
});

<<<<<<< HEAD
=======
   Route::get('/users/addRole','App\Http\Controllers\UserController@addRole')->name('users.addRole');
   Route::get('/users/add','App\Http\Controllers\UserController@add')->name('users.add');


    
>>>>>>> 9cb94a7d9dc3a67b6827badf265ee525624e8715
