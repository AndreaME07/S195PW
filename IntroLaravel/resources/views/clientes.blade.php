@extends('layouts.plantilla1')
@section('titulo','Clientes')
@section('contenido') 

    {{-- inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)

        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre}}
            </div>
        <div clas="card-body">
            <h5 class="fw-bold text-justify mx-2"> {{$cliente->correo}} </h5>
            <h5 class="fw-bold text-justify mx-2">{{$cliente->telefono}}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm"> {{__('Actualizar')}} </button>
            <button type="submit" class="btn btn-danger btn-sm"> {{__('Eliminar')}} </button>
        </div>
        </div>{{--Termina div de tarjeta--}}
        @endforeach
    </div>{{--  divcontainer --}}
@endsection