@extends('layouts.plantilla')
@section('contenido')

  <div class="card font-monospace m-5 w-75 ">
    <div class="card-header" style="background-color: rgba(178, 121, 231, 0.600)">
        Un formulario que no sé que puede hacer
    </div>

    <div class="card-body text-justify " style="background-color: rgba(178, 121, 231, 0.502)">
        <form action="#" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre </label>
                <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre')}}">
                {{-- <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }} </small> --}}
            </div>

            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellidos </label>
                <input type="text" class="form-control" name="txtapellido" value="{{ old('txtnombre')}}" >
                {{-- <small class="text-danger fst-italic"> {{ $errors->first('txtapellido') }} </small> --}}
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtnombre')}}">
                {{-- <small class="text-danger fst-italic"> {{ $errors->first('txtcorreo') }} </small> --}}
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="txttelefono" value="{{ old('txtnombre')}}">
                {{-- <small class="text-danger fst-italic"> {{ $errors->first('txttelefono') }} </small> --}}
            </div>
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1 w-25">
                    <button type="submit" class="btn btn-success btn-sm"> Guardar Cliente </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

