<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" >El Alquimista</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIS('rutainicio')?'text-info':'' }}" href="{{route('rutainicio') }}">{{__('Inicio')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIS('rutaformulario')?'text-info':'' }}" href="{{route('rutaformulario')}}">{{__('Registro')}}</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('contenido')
      <div class="container-fluid">
        <div class="row p-5 pb-2 bg-dark text-white">
            <div class="col-xs-12 col-lg-4">
                <p class="h4">El Alquimista</p>
            </div>
            <div class="col-xs-12 col-lg-4 pt-2">
                <p class="text-light ">Today is : {{ now()->format('d/m/Y') }}</p>
            </div>
            <div class="col-xs-12 col-lg-4 pt-2">
                <p class="text-light text-center">Copyright - All rights reserved © 2024</p>
            </div>
        </div>
    </div>    
      @yield('footer')

</body>
</html>