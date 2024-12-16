<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('/auth/login');
});

Route::resources([
    'users' => UserController::class,
]);

Route::resources([
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    'roles' => RoleController::class,
]);

Route::resources([
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    'registrations' => RegistrationController::class,

]);

Route::resources([
    'subjects' => SubjectController::class,
]);

Route::resources([
    'userSubjects' => UserSubjectController::class,
]);

Route::resources([
    'user' => UserController::class,
]);
Route::resources([
    'professor' => HomeController::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/professor', [App\Http\Controllers\HomeController::class, 'professor'])->name('professor');

Route::get('/god', [App\Http\Controllers\HomeController::class, 'god'])->name('god');


