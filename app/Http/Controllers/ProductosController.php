<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function index() {
    	return view('admin.productos.index')//listado
    }

    public function agregar() {
    	    return view('admin.productos.agregar')//formulario para agregar
    }

    public function guardar() {
    	
    }
}
