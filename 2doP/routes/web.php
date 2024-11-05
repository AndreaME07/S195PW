<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFrituras;


/* Route::get('/', function () {
    return view('form');
});*/


Route::post('/formFrituras',[ControladorFrituras::class,'procesarRegistro'])->name('procesar');


Route::get('/formFrituras', [ControladorFrituras::class, 'home'])->name('formFrituras');
