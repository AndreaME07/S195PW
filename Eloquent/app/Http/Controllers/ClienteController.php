<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = cliente::all();

        return view ('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = new cliente();

        $insert->nombre = $request->input('txtnombre');
        $insert->apellido = $request->input('txtapellido');
        $insert->correo = $request->input('txtcorreo');
        $insert->telefono = $request->input('txttelefono');
        $insert->save();

        $cliente = $request->input('txtnombre');

        session()->flash('exito', 'Se guardó el usuario ' . $cliente);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        $editarCliente = cliente::find($cliente->id);
        $editarCliente->nombre = $request->input('nombre');
        $editarCliente->apellido = $request->input('apellido');
        $editarCliente->correo = $request->input('correo');
        $editarCliente->telefono = $request->input('telefono');
        $editarCliente->save();

        $cliente = $request->input('nombre');
        session()->flash('exito', 'Se guardó el usuario ' . $cliente);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
{
    $cliente->delete();
    session()->flash('exito', 'Se eliminó el usuario ' . $cliente->nombre);
    return redirect()->back();
}

}
