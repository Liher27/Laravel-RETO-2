<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;
use App\Models\Registration;
use App\Models\Role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserSubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\CheckRoleFor404;
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

   
});

Route::middleware(['auth', ErrorForAlumno::class])->group(function () {
    Route::get('/user', function () {
        abort(404);
    });

    Route::get('/page2', function () {
        return view('page2');
    });

    Route::get('/page3', function () {
        return view('page3');
    });
});


    Route::get('/settings', [HomeController::class, 'handle'])->middleware('auth');
   Route::post('/users/{user}/addRole','App\Http\Controllers\UserController@addRole')->name('users.addRole');
   Route::delete('users/{user}/delete-role/{role}', [UserController::class, 'deleteRole'])->name('users.deleteRole');
   Route::get('/users/{user}/delete','App\Http\Controllers\UserController@delete')->name('users.delete');
   Route::get('/users/{user}/add','App\Http\Controllers\UserController@add')->name('users.add');


    
