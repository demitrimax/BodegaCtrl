<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\Clientes;

class ClientesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
    		$clientes = Clientes::all();
    	return view('admin.clientes.index')->with(compact('clientes'));
    }


    public function agregar() {
    	    return view('admin.clientes.agregar');//formulario para agregar
    }
    public function guardar(Request $request) {
    	//dd($request->all());

    	$cliente = new Clientes();
    	$cliente->Nombre = $request->input('nombre');
    	$cliente->RFC = $request->input('RFC');
    	$cliente->PorcDescuento = $request->input('descuento');
    	$cliente->save();

    	return redirect('/admin/clientes');
    }

     public function verclient($id) {
            $cliente = Clientes::find($id);
            return view('admin.clientes.verclient')->with(compact('cliente'));//vista detalles del cliente
    }


     public function editar($id) {
            $cliente = Clientes::find($id);
            return view('admin.clientes.editar')->with(compact('cliente'));//formulario para agregar
    }

    public function actualizar(Request $request, $id) {
        //dd($request->all());

        $cliente = Clientes::find($id);
        $cliente->Nombre = $request->input('nombre');
        $cliente->RFC = $request->input('RFC');
        $cliente->PorcDescuento = $request->input('descuento');
        $cliente->save();

        return redirect('/admin/clientes');

    }
}
