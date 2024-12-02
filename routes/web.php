<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});


Route::resources([
    'clients' => Controller::class,
]);

Route::resources([
    'role' => RoleController::class,
]);