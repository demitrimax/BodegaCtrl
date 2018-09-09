@extends('admin.layout')

@section('product-active','active')

@section('stylesheets')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('titulo-pagina','Agregar Usuario')
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
       <h3 class="box-title">Agregar Nuevo Usuario</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->
     <form role="form" action="{{url('admin/usuario/guardar')}}" method="post">
        {{csrf_field()}}
       <div class="box-body">
         <div class="form-group">
           <label for="Nombre">Nombre</label>
           <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo" name="nombre">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Correo Electrónico</label>
           <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" name="email">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Contraseña</label>
           <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
         </div>
         <div class="form-group">
           <label for="Nombre">Profesión</label>
           <input type="text" class="form-control" id="profesion" placeholder="Profesión" name="profesion">
         </div>

         <div class="form-group">
                  <label>Rol</label>
                  <select class="form-control" id="rol" name="rol">
                    <option value="admin" >Administrador</option>
                    <option value="user" >Usuario</option>
                    <option value="caja" >Caja</option>
                    <option value="invent" >Inventario</option>
                  </select>
                </div>
       </div>
       <!-- /.box-body -->

       <div class="box-footer">
         <button type="submit" class="btn btn-primary">Agregar Nuevo Usuario</button>
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
