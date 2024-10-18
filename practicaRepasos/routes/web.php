<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCalcular; // Asegúrate de usar el controlador correcto

// Ruta para la vista principal
Route::view('/', 'inicio')->name('rutainicio');
// Ruta para la vista para la calculadora
Route::view('/calcula', 'calcula')->name('rutaCalcula');

// Ruta para el método convertir
Route::post('/convertir', [ControladorCalcular::class, 'convertir'])->name('convertir');
