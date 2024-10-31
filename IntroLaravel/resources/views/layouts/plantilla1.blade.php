<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> @yield('titulo')</title>
</head>
<body>
        <!--ponemos la navbar-->
        <nav class="navbar navbar-expand-lg  bg-dark border-bottom border-body"  data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutainicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIS('rutaformulario')?'text-warning':'' }} " aria-current="page" href="{{ route('rutaformulario') }}"> {{__('Registro clientes')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIS('rutaclientes')?'text-danger':'' }} " aria-current="page" href="{{ route('rutaclientes') }}"> {{__('Consulta clientes')}} </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenido')

</body>
</html>