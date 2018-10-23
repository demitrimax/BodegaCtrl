@extends('admin.layout')

@section('product-active','active')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('titulo-pagina','Lista de Productos')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li class="active">Lista de Producto</li>
      </ol>
@endsection
@section('content')
	     <div class="row">
        <div class="col-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">CATALOGO DE PRODUCTOS</h3>
            </div>

          <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Producto</th>
                  <th>U. Medida</th>
                  <th>Stock</th>
                  <th>Precio</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($productos as $producto)
                <tr>
                  <td>{{ $producto->nombre }}</td>
                  <td>{{ $producto->Umedida }}</td>
                  <td>{{ $producto->stock }}</td>
                  <td>{{ $producto->precio }}</td>
                  <th><a href="{{ url('/admin/productos/'.$producto->id.'/editar')}}"><button class="btn btn-primary" rel="tooltip" title="Editar Producto"> <i class="fa fa-edit blue"></i> </button></a> <a href="{{ url('/admin/productos/'.$producto->id.'/verprod')}}"><button class="btn btn-success" rel="tooltip" title="Más información"> <i class="fa fa-info-circle"></i></button></a> </th>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Producto</th>
                  <th>U. Medida</th>
                  <th>Stock</th>
                  <th>Precio</th>
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
    $("#example1").DataTable();
    $('#example2').DataTable({
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