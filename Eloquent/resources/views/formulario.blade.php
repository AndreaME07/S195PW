
  @extends('layouts.plantilla1')
  
    @section('titulo','Formulario Clientes')  

    @section('contenido')

      {{-- inicia Tarjeta con formulario --}}

      <div class="container mt-5 col-md-6">


        @session('exito')
        <script>
              Swal.fire({
                  title: "Respuesta del servidor",
                  text: '{{ $value }}',
                  icon: "success"
                });
        </script>
        @endsession



     
        <div class="card font-monospace">

        <div class="card-header fs-5 text-center text-primary">
          {{ __('Registro de Clientes') }}
        </div>

        <div class="card-body text-justify ">

            <form action="{{ route('clientes.store') }}" method="POST">
              {{-- llave de paso para envios por post --}}
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{ __('Nombre') }}:</label>
                    <input type="text"  class="form-control" name="txtnombre" value={{ old('txtnombre') }} >
                    
                <div class="mb-3">
                    <label for="Apellido" class="form-label">{{ __('Apellido') }}:</label>
                    <input type="text" class="form-control" name="txtapellido" value={{ old('txtapellido') }} >
                </div>                
                <div class="mb-3">
                    <label for="correo" class="form-label">{{ __('Correo') }}:</label>
                    <input type="text" class="form-control" name="txtcorreo" value={{ old('txtcorreo') }}>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label"> {{ __('Telefono') }}:</label>
                    <input type="text" class="form-control" name="txttelefono" value={{ old('txttelefono') }} >
                </div>
        </div>

        <div class="card-footer text-muted">

            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> {{ __('Guardar Cliente') }} </button>
              </div>
           </form>
        </div>
      </div>
    </div> {{-- divcontainer --}}
     {{-- Finaliza Tarjeta con formulario --}}

     @endsection
