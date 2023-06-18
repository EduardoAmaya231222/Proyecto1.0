@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Curso</h1>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin</label>
                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="cantidad_beneficiados">Cantidad de Beneficiados</label>
                <input type="number" name="cantidad_beneficiados" id="cantidad_beneficiados" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ubicacion_departamento_id">Ubicación (Departamento)</label>
                <select name="ubicacion_departamento_id" id="ubicacion_departamento_id" class="form-control" required>
                    <option value="">Seleccionar departamento</option>
                    @foreach($departments as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="ubicacion_municipio_id">Ubicación (Municipio)</label>
                <select name="ubicacion_municipio_id" id="ubicacion_municipio_id" class="form-control" required>
                    <option value="">Seleccionar municipio</option>
                    @foreach($municipalities as $municipio)
                        <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="responsable_id">Responsable</label>
                <select name="responsable_id" id="responsable_id" class="form-control" required>
                    <option value="">Seleccionar responsable</option>
                    @foreach($responsables as $responsable)
                        <option value="{{ $responsable->id }}">{{ $responsable->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="estado_id">Estado</label>
                <select name="estado_id" id="estado_id" class="form-control" required>
                    <option value="">Seleccionar estado</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>


    </div>
@endsection