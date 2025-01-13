<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userRoles = Auth::user()->roles->pluck('id')->toArray();
        $course = Course::orderBy('id')->cursorPaginate(env('PAGINATION_COUNT'));
        if ($request->expectsJson()) {
            return response()->json($roles, $userRoles);
        } else {
            return view('courses.index', [
                'courses' =>$course,
                'userRoles' => $userRoles
            ]);
        }
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->id = $request->id;
        $course->course_name = $request->course_name;
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit',['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->id = $request->id;
        $course->course_name = $request->course_name;

        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
