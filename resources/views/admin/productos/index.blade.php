@extends('admin.layout')

@section('titulo-pagina','Lista de Productos')
@section('float-sm-right')
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/productos/agregar/')}}">Agregar Productos</a></li>
              <li class="breadcrumb-item active">Principal</li>
            </ol>
          </div>
@endsection
@section('content')
	     <div class="row">
        <div class="col-12">
         <div class="card">
            <div class="card-header">
              <h3 class="card-title">CATALOGO DE PRODUCTOS</h3>
            </div>

          <div class="card-body">
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
                  <th><button class="btn btn-outline-primary" rel="tooltip" title="Editar Producto"><a href="{{ url('/admin/productos/'.$producto->id.'/editar')}}"> <i class="fa fa-edit blue"></i> </a></button> <button class="btn btn-outline-secondary" rel="tooltip" title="Más información"><a href="{{ url('/admin/productos/'.$producto->id.'/verprod')}}"> <i class="fa fa-info-circle"></i></a></button> </th>
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