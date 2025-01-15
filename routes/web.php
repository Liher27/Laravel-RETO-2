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

    Route::get('/settings', [HomeController::class, 'handle']);
});

   Route::post('/users/{user}/addRole','App\Http\Controllers\UserController@addRole')->name('users.addRole');
   Route::delete('/users/{user}/deleteRole','App\Http\Controllers\UserController@deleteRole')->name('users.deleteRole');
   Route::get('/users/{user}/delete','App\Http\Controllers\UserController@delete')->name('users.delete');
   Route::get('/users/{user}/add','App\Http\Controllers\UserController@add')->name('users.add');


    
