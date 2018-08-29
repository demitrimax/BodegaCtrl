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
    	$cliente->RFC = $request->input('rfc');
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

        $producto = Productos::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->Umedida = $request->input('Umedida');
        $producto->stock = $request->input('stock');
        //falta la imagen del producto
        $producto->precio = $request->input('precio');
        $producto->ExcentoDescuento = ($request->has('ExcentoDescuento'))? true : false;

        $producto->P20 = $request->input('precioP20');
        $producto->P25 = $request->input('precioP25');
        $producto->P29 = $request->input('precioP29');
        $producto->P30 = $request->input('precioP30');
        $producto->P35 = $request->input('precioP35');
        $producto->P40 = $request->input('precioP40');

        $producto->save();

        return redirect('/admin/productos');

    }
}
