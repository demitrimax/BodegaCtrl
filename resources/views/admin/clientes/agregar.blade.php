@extends('admin.layout')
@section('titulo-pagina','Agregar producto nuevo')
@section('float-sm-right')
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Agregar Productos</li>
              <li class="breadcrumb-item"><a href="{{url('admin/productos/')}}">Principal</a></li>
            </ol>
          </div>
@endsection
@section('content')

            <!-- general form elements -->
            <div class="card">
              <div class="card-header">

            <form role="form" method="post" action="{{ url('/admin/productos') }}">
            {{ csrf_field() }} 
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Datos del Producto</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-append">
                  	   <span class="input-group-text">Descripcion</span>
                  		</div>
                  		<input type="text" class="form-control" placeholder="Descripción del producto" name="descripcion">

                </div>
                <div class="form-group">
                    <label>Unidad de Medida</label>
                    <select class="form-control" name="Umedida">
                      <option>Caja</option>
                      <option>Charola</option>
                      <option>Paquete</option>
                    </select>
                  </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" class="form-control" name="precio">
                </div>
                
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ExcentoDescuento" name="ExcentoDescuento">
                        <label class="form-check-label" for="ExcentoDescuento">Excento de Descuento</label>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-block btn-primary"> Agregar Producto
                  	
                  </button>

 
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
        </form>
    </div>
</div>

@stop