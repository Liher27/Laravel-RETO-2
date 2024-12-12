<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $subject = Subject::orderBy('id')->get();
        return view('subjects.index',['subjects' => $subject]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->course_id = $request->course_id;
        $subject->subject_name = $request->subject_name;
        $subject->subject_hours = $request->subject_hours;
        $subject->save();
        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return view('subjects.show',['subject'=>$subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit',['subject'=>$subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->course_id = $request->course_id;
        $subject->subject_name = $request->subject_name;
        $subject->subject_hours = $request->subject_hours;
        $subject->save();
        return view('subjects.show',['subject'=>$subject]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
