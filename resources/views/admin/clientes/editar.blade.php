@extends('admin.layout')
@section('client-active','active')
@section('titulo-pagina','Editar Cliente')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li>Clientes</li>
          <li class="active">Editar Clientes</li>
      </ol>
@endsection
@section('content')
<div class="row">
  <div class="col-md-6">

                <!-- general form elements -->
                <div class="box">
                  <div class="box-header">

                <form role="form" method="post" action="{{ url('/admin/clientes/'.$cliente->id.'/actualizar') }}">
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
                      <input type="text" class="form-control" placeholder="Nombre del Cliente" name="nombre" value="{{$cliente->Nombre}}">
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-append">
                      	   <span class="input-group-text">RFC</span>
                      		</div>
                      		<input type="text" class="form-control" placeholder="Registro Federal de Contribuyentes" name="RFC" value="{{$cliente->RFC}}">

                    </div>
                    <div class="form-group">
                        <label>Porcentaje de Descuento</label>
                        <select class="form-control" name="descuento">
                          <option value="25%" @if($cliente->PorcDescuento == '25%') selected @endif>25%</option>
                          <option value="29%" @if($cliente->PorcDescuento == '29%') selected @endif>29%</option>
                          <option value="30%" @if($cliente->PorcDescuento == '30%') selected @endif>30%</option>
                          <option value="35%" @if($cliente->PorcDescuento == '35%') selected @endif>35%</option>
                          <option value="40%" @if($cliente->PorcDescuento == '40%') selected @endif>40%</option>
                        </select>
                      </div>



                      <button type="submit" class="btn btn-block btn-primary"> Editar Cliente

                      </button>


                    <!-- /input-group -->
                  </div>
                  <!-- /.card-body -->
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

@stop
