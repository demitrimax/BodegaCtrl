@extends('admin.layout')

@section('categorias-active','active')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <script src="{{asset('sweetalert/dist/sweetalert2.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert2.min.css')}}">
@endsection

@section('titulo-pagina','Categorias')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li class="active">Categorias</li>
      </ol>
@endsection
@section('content')
         <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">CATEGORIAS</h3>
            </div>

            <div class="box-body">
            <div class="row">
              <div class="col-md-3">
                <a type="button" class="btn btn-block btn-primary" href="{{url('admin/categorias/agregar')}}">Agregar Categorias</a>
              </div>
            </div>
              <div class="row">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Foto Categoria</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    <td> No.</td>
                    <td> Categoria </td>
                    <td> Descripcion </td>
                    <td><img src="" width="30"></td>
                    <td><a href="#"><button class="btn btn-warning" rel="tooltip" title="Editar usuario"> <i class="fa fa-pencil"></i> </button></a> <a href="#"><button class="btn btn-success" rel="tooltip" title="Perfil del Usuario"> <i class="fa fa-info-circle"></i></button></a> </td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Foto Categoria</th>
                    <th>Opciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
@endsection
@section('scripts')
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('sweetalert/dist/sweetalert2.all.min.js')}}"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
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