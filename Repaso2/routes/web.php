<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/




Route::view('/inicio','inicio')->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');