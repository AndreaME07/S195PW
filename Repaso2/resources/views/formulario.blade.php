@extends('layouts.plantilla1')
@section('contenido')

<div class="container mt-4 p-5 m-5 rounded" style="background-color: rgb(220, 228, 245)"" >
    <h1 class="display-6 text-center mb-4">Registro de Libros</h1>
        <form action="#">
        <!--LLave de paso para envios por post -->
        @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="nombre" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="txtisbn">
                </div>
                <div class="col-sm-6">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="txttitulo">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="txtautor">
                </div>
                <div class="col-sm-6">
                    <label for="paginas" class="form-label">Páginas</label>
                    <input type="number" class="form-control" name="txtpaginas">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="anio" class="form-label">Año</label>
                    <input type="number" class="form-control" name="txtanio">
                </div>
                <div class="col-sm-6">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="txteditorial">
                </div>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email de la editorial</label>
                <input type="email" class="form-control" name="txtemail">
            </div>
            <div class="col-6 my-4 ">
                <button type="submit" class="btn btn-outline-info btn-sm"> Guardar registro </button>
            </div>
        </div>
        </form>
</div>

@endsection