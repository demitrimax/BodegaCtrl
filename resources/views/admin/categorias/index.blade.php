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
              <div class="col-md-3">
                <h3 class="box-title">CATEGORIAS</h3>
              </div>
              <div class="col-md-3">
                <a type="button" class="btn btn-block btn-primary" href="{{url('admin/categorias/agregar')}}">Agregar Categorias</a>
              </div>
            </div>

            <div class="box-body">
              
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Categoría</th>
                    <th>Descripcion</th>
                    <th>Foto Categoria</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($categorias as $key=>$categoria)
                  <tr>
                    <td> {{$key+1}}</td>
                    <td> {{$categoria->nombre}} </td>
                    <td> {{$categoria->descripcion}} </td>
                    <td><img src="{{asset($categoria->foto)}}" width="30"></td>
                    <td><a href="#"><button class="btn btn-warning" rel="tooltip" title="Detalle"> <i class="fa fa-pencil"></i> </button></a> <a href="#"><button class="btn btn-success" rel="tooltip" title="Detalles"> <i class="fa fa-info-circle"></i></button></a> <button class="btn btn-danger" rel="tooltip" title="Eliminar" Onclick="ConfirmDelete({{$categoria->id}})"> <i class="fa fa-remove"></i></button> </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Categoría</th>
                    <th>Descripcion</th>
                    <th>Foto Categoria</th>
                    <th>Opciones</th>
                  </tr>
                  </tfoot>
                </table>
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

    @if (session('mensaje'))
        {!! session('mensaje') !!} 
    @endif
function ConfirmDelete(idcat) {
  swal({
        title: '¿Estás seguro?',
        text: 'Estás por borrar una categoria.',
        type: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        }).then((result) => {
  if (result.value) {
    window.location = 'categorias/'+idcat+'/eliminar';
  }
})
       
}

</script>
@endsection