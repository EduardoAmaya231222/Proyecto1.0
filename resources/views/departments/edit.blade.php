@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Departamento</h1>

        <form action="{{ route('departments.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $department->name }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
