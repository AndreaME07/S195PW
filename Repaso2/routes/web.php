<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorRegistro;

/*Route::get('/', function () {
    return view('welcome');
});*/


#Rutas para trabajar con el controlador
Route::get('/',[controladorRegistro::class,'home'])->name('rutainicio');

Route::get('/formulario',[controladorRegistro::class,'formulario'])->name('rutaformulario');

Route::post('/formulario',[controladorRegistro::class,'procesarRegistro'])->name('procesar');

//Route::view('/inicio','inicio')->name('rutainicio');

// Route::view('/formulario','formulario')->name('rutaformulario');