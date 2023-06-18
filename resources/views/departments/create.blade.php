@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Departamento</h1>

        <form action="{{ route('departments.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
