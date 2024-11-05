<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Registro de Frituras</title>
</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro de Frituras</h1>

    <div class="container mt-5 col-md-5">
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <form action="{{ route('procesar') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="txtnombre">
                @error('txtnombre')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Sabor(s): </label>
                <input type="text" class="form-control" name="txtsabor">
                @error('txtsabor')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>                

            <div class="mb-3">
                <label class="form-label">Peso: </label>
                <input type="text" class="form-control" name="txtpeso">
                @error('txtpeso')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar Fritura</button>
        </form>
    </div>

</body>
</html>
