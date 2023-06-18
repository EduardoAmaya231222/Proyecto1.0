@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Curso</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" required>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $course->start_date }}" required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $course->end_date }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" required>{{ $course->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="beneficiaries" class="form-label">Cantidad de Beneficiados</label>
                <input type="number" class="form-control" id="beneficiaries" name="beneficiaries" value="{{ $course->beneficiaries }}" required>
            </div>

            <div class="mb-3">
                <label for="municipality_id" class="form-label">Ubicación</label>
                <select class="form-control" id="municipality_id" name="municipality_id" required>
                    @foreach ($municipalities as $municipality)
                        <option value="{{ $municipality->id }}" {{ $municipality->id == $course->municipality_id ? 'selected' : '' }}>
                            {{ $municipality->name }}, {{ $municipality->department->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="responsibles" class="form-label">Responsable(s)</label>
                <input type="text" class="form-control" id="responsibles" name="responsibles" value="{{ $course->responsibles }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $course->status }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
