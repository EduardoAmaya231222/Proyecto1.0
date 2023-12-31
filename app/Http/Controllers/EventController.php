<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'descripcion' => 'required',
            'cantidad_beneficiados' => 'required|integer',
            'departamento_id' => 'required|exists:departments,id',
            'municipio_id' => 'required|exists:municipalities,id',
            'responsable_id' => 'required|exists:users,id',
            'estado_id' => 'required|exists:estados,id',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Evento creado exitosamente.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'descripcion' => 'required',
            'cantidad_beneficiados' => 'required|integer',
            'departamento_id' => 'required|exists:departments,id',
            'municipio_id' => 'required|exists:municipalities,id',
            'responsable_id' => 'required|exists:users,id',
            'estado_id' => 'required|exists:estados,id',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Evento actualizado exitosamente.');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Evento eliminado exitosamente.');
    }
}