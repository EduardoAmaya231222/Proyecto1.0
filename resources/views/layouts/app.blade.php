<!DOCTYPE html>
<html>
<head>
    <title>AccionES</title>
    <!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- Scripts de JavaScript de Bootstrap (requieren jQuery) -->


</head>
<body>

    <header>
        <!-- Aquí puedes agregar el contenido del encabezado -->
    </header>

    <nav>
        <!-- Aquí puedes agregar el contenido del menú -->
        <ul>
            <!-- <li><a href="{{ route('users.index') }}">Lista de Usuarios</a></li> -->
            <!-- Agrega más elementos de menú según tus necesidades -->
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes agregar el contenido del pie de página -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
