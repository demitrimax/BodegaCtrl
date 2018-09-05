@extends('admin.layout')
@section('reportes-active','active')
@section('titulo-pagina','Reporte de Inventarios')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li>Productos</li>
          <li class="active">Agregar Producto</li>
      </ol>
@endsection
@section('content')
<div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Seleccione la Tienda y la Fecha del reporte</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form" method="post" action="{{url('admin/reportes/repinventario')}}">
              {{csrf_field()}}
              <div class="form-group">
                <div class="row">
                <div class="col-md-1">
                  <label>Tienda:</label>
                </div>
                <div class="col-md-4">
                  <select class="form-control" name="tienda">
                    @foreach($tiendas as $tienda)
                    <option value="{{ $tienda->tienda_id }}">{{ $tienda->nomtienda }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-1">
                  <label>Fecha:</label>
                </div>
                <div class="col-md-4">
                <select class="form-control" name="fecharep">
                  @foreach($fechas as $fecha)
                  <option value="{{$fecha->fecha}}">{{ date('d-m-Y', strtotime($fecha->fecha)) }}</option>
                  @endforeach
                </select>
              </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Ver Reporte</button>
              </div>

            </form>
          </div>
          <!-- /.box-body -->
        </div>
@stop
