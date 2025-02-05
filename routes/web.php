<?php

use App\Http\Middleware\ErrorForAlumno;
use Illuminate\Support\Facades\Route;
use App\Models\Registration;
use App\Models\Subject;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {

        $registrations = Registration::orderBy('id')->cursorPaginate(env('PAGINATION_COUNT'));
        $roles = Role::where('id', '<=', 3)->get();
        $user_roles = Auth::user()->roles->pluck('id')->toArray();
        $subjects = Subject::orderBy('id')->paginate(env('PAGINATION_COUNT'));

        if (in_array(1, $user_roles)) {
            return view('god.index', [
                'registrations' => $registrations,
                'roles' => $roles,
                'subjects' => $subjects,
            ]);
        } elseif (in_array(2, $user_roles)) {
            return view('admin.index', [
                'registrations' => $registrations,
                'roles' => $roles,
                'subjects' => $subjects,
            ]);
        } elseif (in_array(3, $user_roles)) {
            return view('professor.index');
        } else {
            return view('home');
        }


    });
    Route::middleware([ErrorForAlumno::class])->group(function () {
        Route::resources([
            'subjects' => SubjectController::class,
            'users' => UserController::class,
            'roles' => RoleController::class,
            'registrations' => RegistrationController::class,
            'userSubjects' => UserSubjectController::class,
            'courses' => CourseController::class,
        ]);
    });

    Route::get('/settings', [HomeController::class, 'handle']);
});

Route::post('/users/{user}/addRole', 'App\Http\Controllers\UserController@addRole')->name('users.addRole');
Route::delete('/users/{user}/deleteRole', 'App\Http\Controllers\UserController@deleteRole')->name('users.deleteRole');
Route::get('/users/{user}/delete', 'App\Http\Controllers\UserController@delete')->name('users.delete');
Route::get('/users/{user}/add', 'App\Http\Controllers\UserController@add')->name('users.add');




