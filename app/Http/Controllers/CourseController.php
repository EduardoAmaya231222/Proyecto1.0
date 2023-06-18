<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Municipality;
use App\Models\Department;
use App\Models\User;
use App\Models\Estado;

class CourseController extends Controller
{
    public function create()
    {
        $municipalities = Municipality::all();
        $departments = Department::all();
        $responsables = User::all();
        $estados = Estado::all();

        return view('courses.create', compact('municipalities', 'departments', 'responsables', 'estados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'descripcion' => 'required',
            'cantidad_beneficiados' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
            'responsable_id' => 'required',
            'estado_id' => 'required',
        ]);

        Course::create($request->all());

        // Agrega aquí cualquier lógica adicional que necesites

        return redirect()->route('courses.index')->with('success', 'Curso agregado exitosamente.');
    }
}
