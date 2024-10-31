<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Plantilla</title>


</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">El Alquimista</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIS('rutainicio')?'text-info':'' }}" href="{{route('rutainicio') }}">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIS('rutaformulario')?'text-info':'' }}" href="{{route('rutaformulario')}}">Registro</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      @yield('contenido')

</body>
</html>