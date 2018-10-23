@extends('admin.layout')
@section('product-active','active')
@section('titulo-pagina','Editar producto')
@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li>Productos</li>
          <li class="active">Detalles Producto</li>
      </ol>
@endsection
@section('content')

            <!-- general form elements -->
            <div class="box box-info">
              <div class="box-header">

            <form role="form" method="post" action="{{ url('/admin/productos/'.$producto->id.'/actualizar') }}" class="form-horizontal">
            {{ csrf_field() }}

                <h3 class="box-title">Datos del Producto</h3>
              </div>
              <div class="box-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre" value="{{ $producto->nombre }}">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-append">
                  	   <span class="input-group-text">Descripcion</span>
                  		</div>
                  		<input type="text" class="form-control" placeholder="Descripción del producto" name="descripcion" value="{{ $producto->descripcion }}">

                </div>
                <div class="form-group">
                    <label>Unidad de Medida</label>
                    <select class="form-control" name="Umedida">
                      <option @if ($producto->Umedida == 'Caja') Selected @endif>Caja</option>
                      <option @if ($producto->Umedida == 'Charola') Selected @endif>Charola</option>
                      <option @if ($producto->Umedida == 'Paquete') Selected @endif>Paquete</option>
                    </select>
                  </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Minimo en Stock</span>
                  </div>
                  <input type="number" class="form-control" name="stock" value="{{ $producto->stock }}"->
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Precio $</span>
                  </div>
                  <input type="number" class="form-control" name="precio" value="{{ $producto->precio }}"->
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Precio 25% $</span>
                  </div>
                  <input type="number" class="form-control" name="precioP25" value="{{ $producto->P25 }}">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Precio 29% $</span>
                  </div>
                  <input type="number" class="form-control" name="precioP29" value="{{ $producto->P29 }}">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Precio 30% $</span>
                  </div>
                  <input type="number" class="form-control" name="precioP30" value="{{ $producto->P30 }}">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Precio 35% $</span>
                  </div>
                  <input type="number" class="form-control" name="precioP35" value="{{ $producto->P35 }}">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Precio 40% $</span>
                  </div>
                  <input type="number" class="form-control" name="precioP40" value="{{ $producto->P40 }}">
                </div>


                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ExcentoDescuento" name="ExcentoDescuento"  @if($producto->ExcentoDescuento == 1) checked="true" @endif>
                        <label class="form-check-label" for="ExcentoDescuento">Excento de Descuento</label>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary"> Actualizar Producto

                  </button>

        </form>
    </div>
</div>

@stop
