<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title>Formulario</title>
</head>
<body>
<!--ponemos la navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Turista sin Maps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Registro de clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Consulta de clientes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--agregamos la card-->
<!--formulario-->

<div class="card text-center">

    <div class="card-header">
        Registro de clientes
    </div>

    <div class="card-body">
    <form action="">
        <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="" >
        </div>

        <div class="mb-3">
        <label for="Apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" id="" >
        </div>

        <div class="mb-3">
        <label for="Correo" class="form-label">Correo</label>
        <input type="mail" class="form-control" id="" >
        </div>

        <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" id="" >
        </div>

        </div>

        <div class="card-footer text-body-secondary">

            <button type="submit" class="btn btn-success">Hola</button>
    </form>
        </div>

    </div>

</body>
</html>