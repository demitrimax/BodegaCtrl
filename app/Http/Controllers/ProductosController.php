<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\Productos;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{

    public function index() {
    	$productos = Productos::all();
    	return view('admin.productos.index')->with(compact('productos')); //listado de productos
    }

    public function agregar() {
    	    return view('admin.productos.agregar');//formulario para agregar
    }

    public function guardar(Request $request) {
    	//dd($request->all());
    	
    	$producto = new Productos();
    	$producto->nombre = $request->input('nombre');
    	$producto->descripcion = $request->input('descripcion');
    	$producto->Umedida = $request->input('Umedida');
    	$producto->precio = $request->input('precio');
    	$producto->ExcentoDescuento = ($request->has('ExcentoDescuento'))? true : false;
    	$producto->stock = 1;
    	$producto->save();
    	
    	return redirect('/admin/productos');
    }

     public function verprod($id) {
            $producto = Productos::find($id);
            return view('admin.productos.verprod')->with(compact('producto'));//formulario para agregar
    }


     public function editar($id) {
            $producto = Productos::find($id);
            return view('admin.productos.editar')->with(compact('producto'));//formulario para agregar
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
