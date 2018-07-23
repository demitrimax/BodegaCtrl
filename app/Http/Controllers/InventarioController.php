<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\Inventario;

class InventarioController extends Controller
{
    //función que guarde los valores para el post por la aplicación
      public function guardarpost(Request $request) {
    	dd($request->all());
    	
    	/*
    	$rep_inventario = new inventario();
        $rep_inventario->fecha = $request('fecha');
        $rep_inventario->idtienda = $request('idtienda');
        $rep_inventario->nomtienda = $request('nomtienda');
        $rep_inventario->id_producto = $request('id_producto');
        $rep_inventario->Nproducto = $request('Nproducto');
        $rep_inventario->saldo_inicial = $request('saldo_inicial');
        $rep_inventario->entradas = $request('entradas');
        $rep_inventario->cant_acum = $request('cant_acum');
        $rep_inventario->salidas = $request('salidas');
        $rep_inventario->stockreal = $request('stockreal');
        $rep_inventario->idunicodia = $request('idunicodia');
    	$rep_inventario->save();
    	
    	return redirect('/admin/productos');
    	*/
    }
}
