<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFrituras;

class ControladorFrituras extends Controller
{
    public function home()
    {
        return view('formFrituras');
    }

    public function procesarRegistro(validadorFrituras $peticion)
    {
        $fritura = $peticion->input('txtnombre');
        
        // Corrección en el uso de `session()->flash()`
        session()->flash('mensaje', 'Almacenado en BD: ' . $fritura);
        
        // Corrección en el retorno de la redirección
        return redirect()->route('formFrituras');
    }
}
