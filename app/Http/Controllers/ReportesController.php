<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\rep_inventario;
use PDF;

class ReportesController extends Controller
{
        /*
        * @return void
        */
       public function __construct()
       {
           $this->middleware('auth');
       }
    //
    public function inventariofechas()
    {
      $tiendas = rep_inventario::select('tienda_id')->groupBy('tienda_id')->get();
      $fechas = rep_inventario::select('fecha')->groupBy('fecha')->orderBy('fecha','DESC')->get();
      return view('admin.reportes.inventario')->with(compact('fechas','tiendas'));
    }
    public function rep_inventario(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $rep_inventario = rep_inventario::where('fecha',$fecharep)->where('tienda_id',$tiendaid)->get();
      return view('admin.reportes.repinventario')->with(compact('fecharep','tiendaid','rep_inventario'));
    }
    public function rep_inventarioPDF(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $rep_inventario = rep_inventario::where('fecha',$fecharep)->where('tienda_id',$tiendaid)->get();

      $pdf = PDF::loadView('admin.reportes.repinventario', compact('fecharep', 'tiendaid', 'rep_inventario'));
      return $pdf->stream();
    }
}
