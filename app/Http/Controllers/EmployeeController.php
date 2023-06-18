<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Muestra una lista de empleados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    /**
     * Muestra el formulario para crear un nuevo empleado.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Almacena un nuevo empleado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'password' => 'required',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Empleado creado exitosamente.');
    }

    /**
     * Muestra los detalles de un empleado específico.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Muestra el formulario para editar un empleado específico.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Actualiza los datos de un empleado específico en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,'.$employee->id,
            'password' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Empleado actualizado exitosamente.');
    }

    /**
     * Elimina un empleado específico de la base de datos.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Empleado eliminado exitosamente.');
    }
}
