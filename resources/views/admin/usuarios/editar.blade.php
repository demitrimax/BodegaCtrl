@extends('admin.layout')

@section('user-active','active')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('titulo-pagina','Editar Usuario')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li class="active">Usuarios</li>
      </ol>
@endsection
@section('content')
<div class="row">
 <!-- left column -->
 <div class="col-md-6">
   <!-- general form elements -->
   <div class="box box-primary">
     <div class="box-header with-border">
       <h3 class="box-title">Editar Datos del Usuario</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->
     <form role="form" action="{{url('admin/usuario/'.$usuario->id.'/actualizar')}}" method="post">
        {{csrf_field()}}
       <div class="box-body">
         <div class="form-group">
           <label for="Nombre">Nombre</label>
           <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo" name="nombre" value="{{$usuario->name}}">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Correo Electrónico</label>
           <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" name="email" value="{{$usuario->email}}">
         </div>
         <div class="form-group">
           <label for="Nombre">Profesión</label>
           <input type="text" class="form-control" id="profesion" placeholder="Profesión" name="profesion" value="{{$usuario->profesion}}">
         </div>

         <div class="form-group">
                  <label>Rol</label>
                  <select class="form-control" id="rol" name="rol">
                    <option value="admin" @if($usuario->rol=="admin") selected @endif>Administrador</option>
                    <option value="user" @if($usuario->rol=="user") selected @endif>Usuario</option>
                    <option value="caja" @if($usuario->rol=="caja") selected @endif>Caja</option>
                    <option value="invent" @if($usuario->rol=="invent") selected @endif>Inventario</option>
                  </select>
                </div>
       </div>
       <!-- /.box-body -->

       <div class="box-footer">
         <button type="submit" class="btn btn-primary">Actualizar Datos</button>
       </div>
     </form>
   </div>
   <!-- /.box -->


 </div>
 <!--/.col (left) -->
 <!-- right column -->

 <!--/.col (right) -->
</div>

@endsection
@section('scripts')

@endsection
