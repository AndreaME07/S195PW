<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;
//manejo de hora y fechas
use Carbon\Carbon;

class clienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    /**
     * Muestra la consulta del CRUD
     */
    public function index()
    {
        $consultaClientes= Clientes::orderBy('id','desc')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * Para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * La usamos para ejecutar el insert
     */
    public function store(validadorCliente $request)
    {
        // Validar que el campo seleccionado no exista en la base de datos ---------//
        // $validar = Clientes::select('telefono')->where('telefono', $request->txttelefono)->count();

        // if($validar > 0){
        //     session()->flash('error','El número de telefono ya existe, por favor intenta con otro');
        //     return back();
        // }

        Clientes::create([
            'nombre'=>$request->input('txtnombre'),
            'apellido'=>$request->input('txtapellido'),
            'correo'=>$request->input('txtcorreo'),
            'telefono'=>$request->input('txttelefono'),
            //preparamos la fecha y la hora en la que se está haciendo la ejecutación
            'created_at'=>Carbon::now() ,
            'updated_at'=>Carbon::now(),
        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route ('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validate = $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|string|max:255',
            'txttelefono' => 'required|numeric'
        ]);

        $upd_cliente = Clientes::where('id', $request->txtid)->update([
            'nombre' => $request->txtnombre,
            'apellido' => $request->txtapellido,
            'correo' => $request->txtcorreo,
            'telefono' => $request->txttelefono
        ]);

        session()->flash('exito','Se actualizo el cliente: '. $request->txtnombre);

        return to_route ('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteclient(Request $request)
    {
        // dd($request->all());
        $dt_cliente = Clientes::where('id', $request->idcliente)->delete();
        session()->flash('exito','Se borro el cliente exitosamente ');

        return to_route ('rutaclientes');
    }


}
