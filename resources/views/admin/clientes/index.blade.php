@extends('admin.layout')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('titulo-pagina','Lista de Clientes')
@section('float-sm-right')
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/clientes/agregar/')}}">Agregar Clientes</a></li>
              <li class="breadcrumb-item active">Principal</li>
            </ol>
          </div>
@endsection
@section('content')
	     <div class="row">
        <div class="col-12">
         <div class="card">
            <div class="card-header">
              <h3 class="card-title">LISTADO DE CLIENTES</h3>
            </div>

          <div class="card-body">
              <table id="Clientes" class="table table-bordered table-hover">
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
                  <th><button class="btn btn-outline-primary" rel="tooltip" title="Editar Cliente"><a href="{{ url('/admin/clientes/'.$cliente->id.'/editar')}}"> <i class="fa fa-edit blue"></i> </a></button> <button class="btn btn-outline-secondary" rel="tooltip" title="Más información"><a href="{{ url('/admin/clientes/'.$cliente->id.'/verclient')}}"> <i class="fa fa-info-circle"></i></a></button> </th>
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