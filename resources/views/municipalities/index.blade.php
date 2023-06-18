@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Municipios</h1>

        <a href="{{ route('municipalities.create') }}" class="btn btn-primary mb-3">Agregar Municipio</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Municipio</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipalities as $municipality)
                    <tr>
                        <td>{{ $municipality->name }}</td>
                        <td>{{ $municipality->department->name }}</td>
                        <td>
                            <a href="{{ route('municipalities.edit', $municipality) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('municipalities.destroy', $municipality) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este municipio?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
