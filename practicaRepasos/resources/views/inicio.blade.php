<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

        <div class="image-container ">
            <img src="{{ asset('images/logo.png') }}" alt="Logo upq" width="180" height="180" >
        </div>

        <p style="text-align: center;" class="fs-5">Universidad Politécnica de Querétaro</p>
        <p style="text-align: center;" class="fs-5">Ingeniería en Sistemas Computacionales</p>
        <p style="text-align: center;" class="fs-5">Programación Web</p>
        <p style="text-align: center;" class="fs-5">Repaso Laravel 1</p>
        <p style="text-align: center;" class="fs-5">Alumna Andrea Alicia Medina Everardo</p>
        <p style="text-align: center;" class="fs-5">Grupo S-195</p>
        <p style="text-align: center;" class="fs-5">Séptimo cuatrimestre</p>
        <div class="botonr">
            <a href="{{ route('rutaCalcula') }}" class="btn btn-warning">Repaso 1</a>
        </div>
        
</body>
</html>