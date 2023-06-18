@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Departamentos</h1>

        <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Agregar Departamento</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
