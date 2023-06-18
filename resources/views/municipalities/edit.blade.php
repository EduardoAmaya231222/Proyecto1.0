@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Municipio</h1>

        <form action="{{ route('municipalities.update', $municipality) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $municipality->name }}" required>
            </div>

            <div class="mb-3">
                <label for="department_id" class="form-label">Departamento</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" {{ $municipality->department_id == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
