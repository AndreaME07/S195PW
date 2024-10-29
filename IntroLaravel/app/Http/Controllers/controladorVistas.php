<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(validadorCliente $peticion )
    {
        //redireccion con mensajes en sesion

        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route ('rutaformulario');

        //redirección usan la ruta
       // return redirect ('/');

        //redirección con nombre de ruta
        //return redirect()->route('rutaclientes');

        //redireccion al origen la peticion
        //return back();

        //redirección con valores de retorno
        $id= [['usuario'=>1],['usuario'=>2]];
        return view('formulario',compact('id'));
    }

}
