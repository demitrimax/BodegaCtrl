@extends('admin.layout')

@section('client-active','active')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('titulo-pagina','Lista de Clientes')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li class="active">Clientes</li>
      </ol>
@endsection
@section('content')
	     <div class="row">
        <div class="col-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">LISTADO DE CLIENTES</h3>
            </div>

           <div class="box-body">
            <div class="col-md-3">
             <a type="button" class="btn btn-block btn-primary" href="{{url('admin/clientes/agregar')}}">Agregar Clientes</a>
           </div>
              <table id="Clientes2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>RFC</th>
                  <th>Descuento</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                  <td>{{ $cliente->Nombre }}</td>
                  <td>{{ $cliente->RFC }}</td>
                  <td>{{ $cliente->PorcDescuento }}</td>
                  <th><a href="{{ url('/admin/clientes/'.$cliente->id.'/editar')}}"><button class="btn btn-outline-primary" rel="tooltip" title="Editar Cliente"> <i class="fa fa-edit blue"></i> </button></a> <a href="{{ url('/admin/clientes/'.$cliente->id.'/verclient')}}"><button class="btn btn-outline-secondary" rel="tooltip" title="Más información"> <i class="fa fa-info-circle"></i></button></a> </th>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>RFC</th>
                  <th>Descuento</th>
                  <th>Opciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('scripts')
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $("#Clientes2").DataTable();
    $('#Clientes').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
