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
        $registration = Registration::orderBy('id')->get();
        return view('registration.index',['registration' => $registration]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration.create');
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
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        return view('registration.show',['registration'=>$registration]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration  $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration  $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration  $registration)
    {
        //
    }
}
