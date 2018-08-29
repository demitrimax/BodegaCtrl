@extends('admin.layout')
@section('product-active','active')
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
            <i class="fa fa-globe"></i> Control de Bodega Online
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
            <tr>
              @foreach ($rep_inventario as $producto)
              <td>{{$producto->Nproducto}}</td>
              <td>{{$producto->saldo_inicial}}</td>
              <td>{{$producto->entradas}}</td>
              <td>{{$producto->cant_acum}}</td>
              <td>{{$producto->salidas}}</td>
              <td>{{$producto->stockreal}}</td>
            </tr>
            @endforeach
            </tbody>
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
