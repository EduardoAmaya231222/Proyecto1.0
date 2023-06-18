@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Cursos</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Descripción</th>
                    <th>Cantidad de Beneficiados</th>
                    <th>Ubicación</th>
                    <th>Responsable</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->end_date }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->beneficiaries }}</td>
                        <td>{{ $course->municipality->name }}, {{ $course->municipality->department->name }}</td>
                        <td>{{ $course->responsible }}</td>
                        <td>{{ $course->status }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('courses.create') }}" class="btn btn-success">Agregar Curso</a>
    </div>
@endsection
