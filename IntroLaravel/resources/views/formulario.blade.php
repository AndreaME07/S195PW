
    @extends('layouts.plantilla1')
        @section('titulo','Formulario Clientes')
        @section('contenido')<!--al poner una seccion nos ayuda a que es la unica parte que no se va a renderizar
            por lo tanto nos ayuda a mantener esta parte intacta -->

    <!--agregamos la card-->
    <!-- inicia tarjeta con formulario-->
    <div class="container mt-5 col-md-6">
        @if (session('exito'))
        <x-Alert tipo="warning">{{ session('exito')}} </x-Alert>
        @endif

        @session('exito')
            <x-Alert tipo="warning">{{ $value }} </x-Alert>
        @endsession

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
            {{__('Registro de Clientes')}} <!--Esto se hace para que traduzca sólo el texto seleccionado-->
        </div>

        <div class="card-body text-justify">
<!-- Recuerda que en action se pone el nombre de la ruta-->
            <form action="/enviar" method="POST" >

                <!--LLave de paso para envios por post -->
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}} </label>
                    <input type="text" class="form-control" name="txtnombre">
                    <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }} </small>
                </div>

                <div class="mb-3">
                    <label for="Apellido" class="form-label">{{__('Apellidos')}} </label>
                    <input type="text" class="form-control" name="txtapellido">
                    <small class="text-danger fst-italic"> {{ $errors->first('txtapellido') }} </small>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}</label>
                    <input type="text" class="form-control" name="txtcorreo">
                    <small class="text-danger fst-italic"> {{ $errors->first('txtcorreo') }} </small>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                    <input type="text" class="form-control" name="txttelefono">
                    <small class="text-danger fst-italic"> {{ $errors->first('txttelefono') }} </small>
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm"> {{ __('Guardar Cliente')}} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        {{-- Finaliza tarjeta con formlario --}}

        @endsection