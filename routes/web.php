<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('/auth/login');
});


Route::resources([
    'users' => UserController::class,
]);
Route::resources([

    'roles' => RoleController::class,
]);

Route::resources([

    'registration' => RegistrationController::class,
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

Route::post('login', 'LoginController@index')->name('login.index');
