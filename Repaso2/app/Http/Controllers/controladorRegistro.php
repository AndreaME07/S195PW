<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorRegistro extends Controller
{
    public function home()
    {
        return view ('inicio');
    }

    public function formulario()
    {
        return view ('formulario');
    }

    public function procesarRegistro(validadorFormulario $peticion)
    {
        $libro= $peticion->input('txttitulo');
        session()->flash('exito',__('Todo Correcto: Libro ').$libro.__(' guardado'));

        return to_route ('rutaformulario');
        /*session()->flash('correcto','Formulario enviado');

        return to_route('rutaformulario');
        //return 'Formulario enviado'; // Redirigir a la ruta del formulario*/
        
    }

}
