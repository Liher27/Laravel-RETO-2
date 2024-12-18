<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistrationController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::orderBy('id')->paginate(15);
        return view('registrations.index',['registrations' =>$registrations]);
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
        $registration->id = $request->course_id;
        $registration->user_id = $request->user_id;
        $registration->registration_date = $request->registration_date;
        $registration->school_year = $request->school_year;
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
        $registration->id = $request->course_id;
        $registration->user_id = $request->user_id;
        $registration->registration_date = $request->registration_date;
        $registration->school_year = $request->school_year;
        $registration->save();
        return redirect()->route('registrations.index');
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
