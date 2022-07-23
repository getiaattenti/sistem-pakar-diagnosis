<?php

namespace App\Http\Controllers;

use App\Models\Symptoms;
use Illuminate\Http\Request;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('symptoms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSymptomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo $request;

        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);
      
        Symptoms::create($request->all());
       
        return redirect()->route('symptoms.index')
            ->with('success','Symptom created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function show(Symptoms $symptoms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function edit(Symptoms $symptoms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Symptoms $symptoms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Symptoms  $symptoms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Symptoms $symptoms)
    {
        //
    }
}
