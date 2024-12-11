<?php

namespace App\Http\Controllers;

use App\Models\user_subject;
use Illuminate\Http\Request;

class UserSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_subject = user_subject::orderBy('id')->get();
        return view('user_subject.index',['user_subjects' => $user_subject]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_subject = new User_subject();
        $user_subject->profesor_id = $request->profesor_id;
        $user_subject->subject_id = $request->subject_id;
        $user_subject->day = $request->day;
        $user_subject->hour = $request->hour;
        $user_subject->save();
        return redirect()->route('user_subject.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(user_subject $user_subject)
    {
        return view('user_subject.show',['user_subject'=>$user_subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_subject $user_subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user_subject $user_subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_subject $user_subject)
    {
        //
    }
}
