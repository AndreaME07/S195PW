@extends('layouts.plantilla1')
@section('titulo', 'Clientes')
@section('contenido')

    @session('exito')
        <script>
            Swal.fire({
                title: "Muy bien",
                text: '{{ $value }}',
                icon: "success"
            });
        </script>
    @endsession

    <!-- Modal -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('actualizarCliente') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">{{ __('ID Cliente') }} </label>
                            <input type="text" readonly style="background-color: gray; color:white " class="form-control"
                                name="txtid" value="{{ old('txtid') }}">
                            <small class="text-danger fst-italic"> {{ $errors->first('txtid') }} </small>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">{{ __('Nombre') }} </label>
                            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
                            <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }} </small>
                        </div>

                        <div class="mb-3">
                            <label for="Apellido" class="form-label">{{ __('Apellidos') }} </label>
                            <input type="text" class="form-control" name="txtapellido" value="{{ old('txtnombre') }}">
                            <small class="text-danger fst-italic"> {{ $errors->first('txtapellido') }} </small>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">{{ __('Correo') }}</label>
                            <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtnombre') }}">
                            <small class="text-danger fst-italic"> {{ $errors->first('txtcorreo') }} </small>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
                            <input type="text" class="form-control" name="txttelefono" value="{{ old('txtnombre') }}">
                            <small class="text-danger fst-italic"> {{ $errors->first('txttelefono') }} </small>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="d-grid gap-2 mt-2 mb-2">
                                <button type="submit" class="btn btn-success btn-sm"> {{ __('Actulizar Cliente') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md-8">
        <!-- Lista de Errores -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @foreach ($consultaClientes as $cliente)
            <div class="card text-justify font-monospace mt-3">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }}
                </div>
                <div clas="card-body">
                    <h5 class="fw-bold text-justify mx-2"> {{ $cliente->correo }} </h5>
                    <h5 class="fw-bold text-justify mx-2">{{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                        data-cliente = "{{ $cliente->id }}" data-nombre = "{{ $cliente->nombre }}"
                        data-apellido = "{{ $cliente->apellido }}" data-correo = "{{ $cliente->correo }}"
                        data-telefono = "{{ $cliente->telefono }}" data-bs-target="#editarModal">
                        {{ __('Actualizar') }}
                    </button>
                    <form id="formEliminar-{{ $cliente->id }}" action="{{ route('eliminarCliente') }}" method="POST">
                        @csrf
                        <input hidden type="text" name="idcliente" value=" {{ $cliente->id }} ">
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmareliminacion('{{ $cliente->id }}')">
                            {{ __('Eliminar') }} </button>
                    </form>
                </div>
            </div>{{-- Termina div de tarjeta --}}
        @endforeach
    </div>{{--  divcontainer --}}


    <script>
        const editarModal = document.getElementById('editarModal');

        editarModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            const id = button.getAttribute('data-cliente');
            const nombre = button.getAttribute('data-nombre');
            const apellido = button.getAttribute('data-apellido');
            const correo = button.getAttribute('data-correo');
            const telefono = button.getAttribute('data-telefono');

            editarModal.querySelector('input[name="txtid"]').value = id;
            editarModal.querySelector('input[name="txtnombre"]').value = nombre;
            editarModal.querySelector('input[name="txtapellido"]').value = apellido;
            editarModal.querySelector('input[name="txtcorreo"]').value = correo;
            editarModal.querySelector('input[name="txttelefono"]').value = telefono;
        });

        function confirmareliminacion(clienteID) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡Esta acción no se puede deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar el formulario si el usuario confirma
                    document.getElementById('formEliminar-' + clienteID).submit();
                }
            });
        }
    </script>
@endsection
