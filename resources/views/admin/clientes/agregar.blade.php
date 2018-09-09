@extends('admin.layout')
@section('titulo-pagina','Agregar nuevo Cliente')
@section('float-sm-right')
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Agregar Cliente</li>
              <li class="breadcrumb-item"><a href="{{url('admin/clientes/')}}">Principal</a></li>
            </ol>
          </div>
@endsection
@section('content')

            <!-- general form elements -->
            <div class="box">
              <div class="box-header">

            <form role="form" method="post" action="{{ url('/admin/clientes') }}">
            {{ csrf_field() }}
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Datos del Cliente</h3>
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
                  	   <span class="input-group-text">RFC</span>
                  		</div>
                  		<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" name="RFC">

                </div>
                <div class="form-group">
                    <label>Porcenta de Descuento</label>
                    <select class="form-control" name="descuento">
                      <option value="25%">25%</option>
                      <option value="29%">29%</option>
                      <option value="30%">30%</option>
                      <option value="35%">35%</option>
                      <option value="40%">40%</option>
                    </select>
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
