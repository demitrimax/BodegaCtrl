@extends('admin.layout')
@section('reportes-active','active')
@section('inventario-active','active')
@section('titulo-pagina','Reporte de Inventarios')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li>Reportes</li>
          <li class="active">Reportes de Inventarios</li>
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
                  <select class="form-control" name="tienda" id="tienda">
                    @foreach($tiendas as $tienda)
                    <option value="{{ $tienda->tienda_id }}">{{ $tienda->nomtienda }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-1">
                  <label>Fecha:</label>
                </div>
                <div class="col-md-4">
                <select class="form-control" name="fecharep" id="fecharep">
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
@section('scripts')
<script src="{{asset('js/date.format.js')}}"></script>
<script>
  $('#tienda').on('change', function(e) {
    //console.log(e);

    var tienda_id = e.target.value;
    //ajax
    $.get('/ajax-fechastiendas?tienda='+tienda_id, function(data) {
      //exito al obtener los datos
      //console.log(data);
      $('#fecharep').empty();
      $.each(data, function(index, fechasObj) {
        var nowDate = new Date(fechasObj.fecha);
        console.log(nowDate.format(" d-mm-yyyy"));
        $('#fecharep').append('<option value ="' + fechasObj.fecha + '">'+nowDate.format("d-mm-yyyy","-6")+'</option>' );
      });
    });
  });
</script>
@endsection
