<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::orderBy('id')->get();
        return view('registrations.index',['registrations' => $registrations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registration = new Registration();
        $registration->course_id = $request->course_id;
        $registration->user_id = $request->user_id;
        $registration->registration_date = $request->reregistration_date;
        $registration->save();
        return redirect()->route('registrations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        return view('registrations.show',['registration'=>$registration]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration  $registration)
    {
        return view('registrations.edit',['registration'=>$registration]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration  $registration)
    {
        $registration->course_id = $request->course_id;
        $registration->user_id = $request->user_id;
        $registration->registration_date = $request->registration_date;
        $registration->save();
        return view('registrations.show',['registration'=>$registration]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration  $registration)
    {
        $registration->delete();
        return redirect()->route('registrations.index');
    }
}
