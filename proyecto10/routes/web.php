<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'inicio')->name('rutaInicio');

Route::resource('cliente', Clientecontroller::class);