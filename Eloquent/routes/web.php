<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('rutaBienvenida');
Route::resource('clientes',ClienteController::class);



