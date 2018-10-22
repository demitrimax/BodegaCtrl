<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\Categorias;

class CategoriasController extends Controller
{
    //
    public function index() {
    	$categorias = Categorias::all();
    	return view('admin.categorias.index')->with(compact('categorias'));
    }
}
