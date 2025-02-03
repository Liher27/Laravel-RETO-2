<?php

namespace App\Http\Controllers;

use App\Models\Reunion;
use Illuminate\Http\Request;

class ReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reunion = Reunion::orderBy('id')->paginate(env('PAGINATION_COUNT'));
        return view('reunion.index',['reunion' =>$reunion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reunion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reunion = new Reunion();
        $reunion->profesor_id = $request->profesor_id;
        $reunion->student_id = $request->student_id;
        $reunion->date = $request->date;
                $reunion->save();
        return redirect()->route('reunion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reunion $reunion)
    {
        return view('reunion.show',['reunion'=>$reunion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reunion $reunion)
    {
        return view('reunions.edit',['reunion'=>$reunion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reunion $reunion)
    {
        $reunion->profesor_id = $request->profesor_id;
        $reunion->student_id = $request->student_id;
        $reunion->date = $request->date;
        $reunion->save();
        return view('reunions.show',['reunion'=>$reunion]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reunion $reunion)
    {
        $reunion->delete();
        return redirect()->route('reunions.index');
    }
}
