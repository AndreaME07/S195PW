<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

<div class="container col-md-5">

    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="txtnombre">
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" class="form-control" name="txtsabor">
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" class="form-control" name="txtpeso" >
        </div>

        <button type="submit" class="btn btn-primary "> Guardar Fritura</button>
    </form>
</div>

</body>
</html>