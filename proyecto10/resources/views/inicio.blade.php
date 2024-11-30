<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Bienvenido Turista</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-center ">
            <div class="card text-center mt-5 mb-5">
                <div class="card-body ">
                    <h1 class="card-title display-3">¡Bienvenido a una página que no sé para que sirve!</h1>
                    <p class="card-text">Aquí hay un botoncito para pasar a lo demás</p>
                    <a href="{{ route('cliente.create')}}" class="btn btn-primary">Siguiente...</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
