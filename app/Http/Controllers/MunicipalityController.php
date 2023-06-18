<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipalities = Municipality::all();
        return view('municipalities.index', compact('municipalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('municipalities.create', compact('departments'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required',
        ]);

        Municipality::create($request->all());

        return redirect()->route('municipalities.index')
            ->with('success', 'Municipio creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipality $municipality)
    {
        return view('municipalities.edit', compact('municipality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipality $municipality)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required',
        ]);

        $municipality->update($request->all());

        return redirect()->route('municipalities.index')
            ->with('success', 'Municipio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipality $municipality)
    {
        $municipality->delete();

        return redirect()->route('municipalities.index')
            ->with('success', 'Municipio eliminado exitosamente.');
    }
}
