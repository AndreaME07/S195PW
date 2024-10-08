
    @extends('layouts.plantilla1')
        @section('titulo','Formulario Clientes')
        @section('contenido') 
        
        <x-Card encabezado="Hola s195" titulo="Titulo 1" textoBoton="Guardar" > Prueba Slot para container </x-Card>
        <x-Card encabezado="DUDAS?? s195" titulo="Titulo 2" textoBoton="No guardar" > Otro cato </x-Card>

        <x-Alert tipo="success">alert verde</x-Alert>
        <x-Alert tipo="danger">alert rojo</x-Alert>
        @endsection