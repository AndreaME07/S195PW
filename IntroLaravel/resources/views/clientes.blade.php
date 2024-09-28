@extends('layouts.plantilla1')
@section('titulo','Clientes')
@section('contenido') 

    {{-- inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md-8">
        <div class="card text-justify ">
            <div class="card-header fs-5 text-primary">
                Andrea Alicia Medina Everardo
            </div>
        <div clas="card-body">
            <h5 class="fw-bold text-justify">andrea.medina@gmail.com</h5>
            <h5 class="fw-bold text-justify">4422653410</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>
        </div>
    </div>
@endsection