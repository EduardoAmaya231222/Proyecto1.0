@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Eliminar Usuario</h1>

        <p>¿Estás seguro de que deseas eliminar este usuario?</p>
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Correo electrónico:</strong> {{ $user->email }}</p>

        <form action="{{ route('users.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
        </form>
    </div>
@endsection
