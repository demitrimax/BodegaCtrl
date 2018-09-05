@extends('admin.layout')
@section('reportes-active','active')
@section('titulo-pagina','Reporte de Inventarios')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li>Reportes</li>
          <li class="active">Reporte de Inventario</li>
      </ol>
@endsection
@section('content')
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Reporte de Inventario {{ $tiendaNombre->nomtienda }}
            <small class="pull-right">Fecha: {{ date('d-m-Y', strtotime($fecharep))  }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Producto</th>
              <th>Saldo Inicial</th>
              <th>Entradas</th>
              <th>Cant. Acumulada</th>
              <th>Salidas</th>
              <th>Stock Final</th>
            </tr>
            </thead>
            <tbody>
            <tr style="height:10px">
              @foreach ($rep_inventario as $producto)
              <td>{{$producto->Nproducto}}</td>
              <td class="text-center">{{$producto->saldo_inicial}}</td>
              <td class="text-center">{{$producto->entradas}}</td>
              <td class="text-center">{{$producto->cant_acum}}</td>
              <td class="text-center">{{$producto->salidas}}</td>
              <td class="text-center">{{$producto->stockreal}}</td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                  <th class="text-center">TOTALES</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('saldo_inicial') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('entradas') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('cant_acum') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('salidas') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('stockreal') }}</th>
                </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-print"></i> Imprimir
          </button>
          <form method="post" action="{{url('admin/reportes/repinventario/pdf')}}">
            {{csrf_field()}}
            <input type="hidden" name="fecharep" value="{{ $fecharep }}">
            <input type="hidden" name="tienda" value="{{ $tiendaid }}">
          <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Guardar en PDF
          </button>
        </form>
        </div>
      </div>
    </section>
@stop
