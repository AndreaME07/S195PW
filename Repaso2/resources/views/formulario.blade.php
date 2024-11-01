@extends('layouts.plantilla1')

@section('contenido')


<div class="container mt-4 p-5 m-5 rounded" style="background-color: rgb(220, 228, 245)"" >
    <h1 class="display-6 text-center mb-4">{{ __('Registro de Libros')}}</h1>

    @if(session('exito'))
        <script>
            alertify.alert().set('message', '{{ session('exito') }}').show();
        </script>
    @endif
        <form action="{{ route('procesar') }}" method="POST">
        <!--LLave de paso para envios por post -->
        @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="isbn" class="form-label" >{{__('ISBN')}}</label>
                    <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn')}}" >
                    @error('txtisbn')
                    <small style=" color: red"> {{ $errors->first('txtisbn') }}</small>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="titulo" class="form-label" >{{__('Título')}}</label>
                    <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo')}}" >
                    @error('txttitulo')
                    <small style=" color: red"> {{ $errors->first('txttitulo') }}}</small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="autor" class="form-label" >{{__('Autor')}}</label>
                    <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor')}}">
                    @error('txtautor')
                    <small style=" color: red"> {{ $errors->first('txtautor') }}</small>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="paginas" class="form-label" >{{__('Páginas')}}</label>
                    <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas')}}" >
                    @error('txtpaginas')
                    <small style=" color: red"> {{ $errors->first('txtpaginas') }} </small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="anio" class="form-label" >{{__('Año')}}</label>
                    <input type="text" class="form-control" name="txtanio" value="{{ old('txtanio')}}">
                    @error('txtanio')
                    <small style=" color: red"> {{ $errors->first('txtanio') }}</small>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="editorial" class="form-label" >{{__('Editorial')}}</label>
                    <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial')}}">
                    @error('txteditorial')
                    <small style=" color: red"> {{ $errors->first('txteditorial') }} </small>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">{{__('Email de editorial')}}</label>
                <input type="txt" class="form-control" name="txtemail" value="{{ old('txtemail')}}">
                @error('txtemail')
                    <small style=" color: red"> {{ $errors->first('txtemail') }} </small>
                    @enderror
            </div>
            <div class="col-6 my-4 ">
                <button type="submit" class="btn btn-outline-info btn-sm">{{__('Guardar registro')}}</button>
            </div>
        </div>
        </form>

        
</div>

@endsection
