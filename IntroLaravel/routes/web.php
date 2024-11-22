<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;

#Rutas para trabajar con un controlador

/*Rutas controlador Vistas*/ 



/*se declara la ruta, despues el tipo de ruta, nombre de la ruta,nombre del controlador,class,nombre del método
nombre con la que se hace referencia a la ruta*/



/*Rutas de ClienteController*/ 
Route::get('/',[clienteController::class,'home'])->name('rutainicio');

Route::get('/cliente/create',[clienteController::class,'create'])->name('rutaformulario');

Route::post('/cliente',[clienteController::class,'store'])->name('procesar');

Route::get('/clientes',[clienteController::class,'index'])->name('rutaclientes');

Route::get('/cliente/editar',[clienteController::class,'edit'])->name('editarcliente');

Route::post('/cliente/actualizar',[clienteController::class,'update'])->name('actualizarCliente');

Route::post('/cliente/eliminar',[clienteController::class,'deleteclient'])->name('eliminarCliente');

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
