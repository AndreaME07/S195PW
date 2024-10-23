<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="container mt-5 col-md-6 ">
        <div class="card">
            <div class="card-header fs-5 text-center bg-info" >
                Calculadora de MB a GB y de GB a TB
            </div>
            <div class="card-body text-justify ">
                <form action="{{ route('convertir') }}" method="POST">
                    @csrf
                    <div class="mb-3 ">
                        <label for="mb" class="form-label">MB: </label>
                        <input type="number" class="form-control" name="txtmb">
                    </div>
                    <div class="mb-3">
                        <label for="gb" class="form-label">GB: </label>
                        <input type="number" class="form-control" name="txtgb">
                    </div>
                    <div class="mb-3">
                        <label for="tb" class="form-label">TB: </label>
                        <input type="number" class="form-control" name="txttb">
                    </div>
            <div class="d-flex align-items-center mt-3">
                <label for="conversionS" ></label>
                <select id="conversionS" name="conversion" class="form-select">
                    <option value="mb_gb">Convertir de MB a GB</option>
                    <option value="gb_mb">Convertir de GB a MB</option>
                    <option value="gb_tb">Convertir de GB a TB</option>
                    <option value="tb_gb">Convertir de TB a GB</option>
                </select>
                <button type="submit" class="btn btn-info ms-2">Calcular</button>
            </div>

                </form>

                @if(session('resultado'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('resultado') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="boton mt-3">
            <a href="{{ route('rutainicio') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
</body>
</html>
