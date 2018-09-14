<?php

namespace VentasApp\Http\Controllers;

use Illuminate\Http\Request;
use VentasApp\rep_inventario;
use VentasApp\rep_financiero;
use VentasApp\rep_ventas;
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
      $tiendas = rep_inventario::select('tienda_id','nomtienda')->groupBy('tienda_id','nomtienda')->get();
      $firstTienda = rep_inventario::select('tienda_id')->groupBy('tienda_id')->first();
      //dd($firstTienda);
      $fechas = rep_inventario::select('fecha')->groupBy('fecha')->where('tienda_id',$firstTienda->tienda_id)->orderBy('fecha','DESC')->get();
      return view('admin.reportes.inventario')->with(compact('fechas','tiendas'));
    }
    public function rep_inventario(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $tiendaNombre = rep_inventario::where('tienda_id',$tiendaid)->select('nomtienda')->get()->first();
      $rep_inventario = rep_inventario::where('fecha',$fecharep)->where('tienda_id',$tiendaid)->get();
      return view('admin.reportes.repinventario')->with(compact('fecharep','tiendaid','rep_inventario','tiendaNombre'));
    }
    public function rep_inventarioPDF(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $tiendaNombre = rep_inventario::where('tienda_id',$tiendaid)->select('nomtienda')->get()->first();
      $rep_inventario = rep_inventario::where('fecha',$fecharep)->where('tienda_id',$tiendaid)->get();

      $pdf = PDF::loadView('admin.reportes.repinventariopdf', compact('rep_inventario','fecharep','tiendaid','tiendaNombre'));
      return $pdf->stream();
      //return view('admin.reportes.repinventariopdf')->with(compact('fecharep','tiendaid','rep_inventario'));
    }
    public function rep_inventarioPRINT(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $tiendaNombre = rep_inventario::where('tienda_id',$tiendaid)->select('nomtienda')->get()->first();
      $rep_inventario = rep_inventario::where('fecha',$fecharep)->where('tienda_id',$tiendaid)->get();

      //$pdf = PDF::loadView('admin.reportes.repinventariopdf', compact('rep_inventario','fecharep','tiendaid','tiendaNombre'));
      //return $pdf->stream();
      return view('admin.reportes.repinventariopdf')->with(compact('fecharep','tiendaid','rep_inventario','tiendaNombre'));
    }

    public function financierofechas()
    {
      $tiendas = rep_ventas::select('tienda_id','nomtienda')->groupBy('tienda_id','nomtienda')->get();
      $firstTienda = rep_ventas::select('tienda_id')->groupBy('tienda_id')->first();
      $fechas = rep_ventas::select('fecha')->where('tienda_id',$firstTienda->tienda_id)->groupBy('fecha')->orderBy('fecha','DESC')->get();
      return view('admin.reportes.financiero')->with(compact('tiendas','fechas'));
    }
    public function rep_financiero(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $tiendaNombre = rep_ventas::where('tienda_id',$tiendaid)->select('nomtienda')->get()->first();
      $gastos = rep_financiero::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('operacion','salida')->get();
      $abonos = rep_financiero::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('operacion','entrada')->get();
      $ventas = rep_ventas::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('condicion','EFECTIVO')->where('cancelado',false)->get();
      return view('admin.reportes.repfinanciero')->with(compact('fecharep','tiendaNombre','tiendaid','gastos','abonos','ventas'));
    }

    public function rep_financieroPDF(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $tiendaNombre = rep_inventario::where('tienda_id',$tiendaid)->select('nomtienda')->get()->first();
      $gastos = rep_financiero::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('operacion','salida')->get();
      $abonos = rep_financiero::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('operacion','entrada')->get();
      $ventas = rep_ventas::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('condicion','EFECTIVO')->where('cancelado',false)->get();

      $pdf = PDF::loadView('admin.reportes.repfinancieropdf', compact('rep_inventario','fecharep','tiendaid','tiendaNombre','gastos','abonos','ventas'));
      return $pdf->stream();
      //return view('admin.reportes.repfinancieropdf')->with(compact('fecharep','tiendaid','tiendaNombre','gastos','abonos','ventas'));
    }
    public function rep_financieroPRINT(Request $request)
    {
      $fecharep = $request->input('fecharep');
      $tiendaid = $request->input('tienda');
      $tiendaNombre = rep_inventario::where('tienda_id',$tiendaid)->select('nomtienda')->get()->first();
      $gastos = rep_financiero::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('operacion','salida')->get();
      $abonos = rep_financiero::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('operacion','entrada')->get();
      $ventas = rep_ventas::where('tienda_id',$tiendaid)->where('fecha',$fecharep)->where('condicion','EFECTIVO')->where('cancelado',false)->get();

      //$pdf = PDF::loadView('admin.reportes.repinventariopdf', compact('rep_inventario','fecharep','tiendaid','tiendaNombre'));
      //return $pdf->stream();
      return view('admin.reportes.repfinancieropdf')->with(compact('fecharep','tiendaid','tiendaNombre','gastos','abonos','ventas'));
    }
    public function ajaxtiendasfechas(Request $request)
    {
      $tiendaid = $request->input('tienda');
      $fechas = rep_inventario::where('tienda_id',$tiendaid)->select('fecha')->groupBy('fecha')->get();
      return $fechas;
    }
    public function ajaxtiendasfechasventas (Request $request)
    {
      $tiendaid = $request->input('tienda');
      $fechas = rep_ventas::where('tienda_id',$tiendaid)->select('fecha')->groupBy('fecha')->get();
      return $fechas;
    }
}
