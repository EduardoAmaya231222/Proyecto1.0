<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h1>Bienvenido a AccionES</h1>

        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-primary me-2">Lista de Usuarios</a>
            <a href="{{ route('users.create') }}" class="btn btn-primary">Agregar Usuario</a>
        </div>

        <div class="mt-4">
            <h2>Departamentos</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0">
                    <a href="{{ route('departments.index') }}" class="btn btn-primary me-2">Lista de Departamentos</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ route('departments.create') }}" class="btn btn-primary">Agregar Departamento</a>
                </li>
            </ul>
        </div>

        <div class="mt-4">
            <h2>Municipios</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0">
                    <a href="{{ route('municipalities.index') }}" class="btn btn-primary me-2">Lista de Municipios</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ route('municipalities.create') }}" class="btn btn-primary">Agregar Municipio</a>
                </li>
            </ul>
        </div>
        <div class="mt-4">
            <h2>Cursos<h2>
            <a href="{{ route('courses.index') }}" class="btn btn-primary me-2">Lista de Cursos</a>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">Agregar Curso</a>
        </div>


        <p>¿Qué desea hacer?</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
