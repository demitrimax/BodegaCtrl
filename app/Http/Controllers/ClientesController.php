<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\Clientes;

class ClientesController extends Controller
{
    //
    public function index() {
    		$clientes = Clientes::all();
    	return view('admin.clientes.index')->with(compact('clientes'));
    }


    public function agregar() {
    	    return view('admin.clientes.agregar');//formulario para agregar
    }
}
