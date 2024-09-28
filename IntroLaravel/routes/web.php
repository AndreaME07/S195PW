<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});  
para poder comentar más rápido es shift,alt,a */ 

#tipo de ruta view 
Route::view('/','inicio')->name('rutainicio');
#ruta y vista que se va a abrir
Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/clientes','clientes')->name('rutaclientes');