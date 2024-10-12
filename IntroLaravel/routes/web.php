<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

#Rutas para trabajar con un controlador
Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');

Route::get('/formulario',[controladorVistas::class,'formulario'])->name('rutaformulario');

Route::get('/clientes',[controladorVistas::class,'consulta'])->name('rutaclientes');
/*se declara la ruta, despues el tipo de ruta, nombre de la ruta,nombre del controlador,class,nombre del método
nombre con la que se hace referencia a la ruta*/

Route::post('/enviar',[controladorVistas::class,'procesarCliente'])->name('procesar');




/* Route::get('/', function () {
    return view('welcome');
});  
para poder comentar más rápido es shift,alt,a */ 


/*
#tipo de ruta view 
Route::view('/','inicio')->name('rutainicio');
#ruta y vista que se va a abrir
Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/clientes','clientes')->name('rutaclientes');

Route::view('/componentes','componentes')->name('rutacomponentes');
*/
