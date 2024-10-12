
    @extends('layouts.plantilla1')
        @section('titulo','Formulario Clientes')
        @section('contenido') 
        <!--al poner una seccion nos ayuda a que es la unica parte que no se va a renderizar
            por lo tanto nos ayuda a mantener esta parte intacta -->

    <!--agregamos la card-->
    <!-- inicia tarjeta con formulario-->
    <div class="container mt-5 col-md-6">
      <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Registro de clientes
        </div>

        <div class="card-body text-justify">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="Apellido" class="form-label">Apellido: </label>
                    <input type="text" class="form-control" id="apellido">
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="email" class="form-control" id="correo">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono: </label>
                    <input type="number" class="form-control" id="telefono">
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">Guardar cliente</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- Finaliza tarjeta con formlario --}}

        @endsection