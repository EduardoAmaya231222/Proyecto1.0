@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Crear Usuario</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            
                            <!-- Botón para volver a la página de bienvenida -->
                            <a href="{{ url('/') }}" class="btn btn-secondary">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
