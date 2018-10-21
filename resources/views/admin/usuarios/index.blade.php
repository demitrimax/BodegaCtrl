@extends('admin.layout')

@section('user-active','active')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <script src="{{asset('sweetalert/dist/sweetalert2.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert2.min.css')}}">
@endsection

@section('titulo-pagina','Lista de Usuarios')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li class="active">Usuarios</li>
      </ol>
@endsection
@section('content')
	     <div class="row">
        <div class="col-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">USUARIOS REGISTRADOS</h3>
            </div>

          <div class="box-body">
            <div class="col-md-3">
             <a type="button" class="btn btn-block btn-primary" href="{{url('admin/usuario/agregar')}}">Agregar Usuarios</a>
           </div>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Correo Electrónico</th>
                  <th>Rol</th>
                  <th>Profesión</th>
                  <th>Foto</th>
                  <th>Último login</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                  <td>{{ $usuario->name }}</td>
                  <td>{{ $usuario->email }}</td>
                  <td>{{ $usuario->rol }}</td>
                  <td>{{ $usuario->profesion }}</td>
                  <td><img src="{{$usuario->avatar}}"></td>
                  <td></td>
                  <th><button class="btn btn-warning" rel="tooltip" title="Editar usuario"><a href="{{ url('/admin/usuario/'.$usuario->id.'/editar')}}"> <i class="fa fa-pencil"></i> </a></button> <button class="btn btn-success" rel="tooltip" title="Perfil del Usuario"><a href="{{ url('/admin/usuario/'.$usuario->id.'/perfil')}}"> <i class="fa fa-info-circle"></i></a></button> </th>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Correo Electrónico</th>
                  <th>Rol</th>
                  <th>Profesión</th>
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
