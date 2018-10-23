@extends('admin.layout')
@section('categorias-active','active')
@section('titulo-pagina','Agregar nueva Categoría')
@section('float-sm-right')
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Agregar Categoría</li>
              <li class="breadcrumb-item"><a href="{{url('admin/clientes/')}}">Principal</a></li>
            </ol>
          </div>
@endsection
@section('content')

            <!-- general form elements -->
            <div class="box mb-3">
              <div class="box-header">

            <form role="form" method="post" action="{{ url('/admin/clientes') }}">
            {{ csrf_field() }}
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Categoría</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nombre del Cliente" name="nombre">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-append">
                  	   <span class="input-group-text">Imagen</span>
                  		</div>
                  		<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" name="RFC">
                </div>
                <div class="form-group mb-3">
                    <label>Foto</label>

                  </div>



                  <button type="submit" class="btn btn-block btn-primary"> Agregar Cliente

                  </button>


                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
        </form>
    </div>
</div>

@stop