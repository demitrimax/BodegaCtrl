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

                <h3 class="box-title">Datos del Producto</h3>
              </div>
              <div class="box-body"> 
                <form role="form" method="post" action="{{ url('/admin/productos/'.$producto->id.'/actualizar') }}" class="form-horizontal">
                {{ csrf_field() }}
                
                <div class="form-group">
                  <label for="Nombre" class="col-sm-2 control-label">Nombre del producto</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" value="{{ $producto->nombre }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Nombre" class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto" value="{{ $producto->descripcion }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="unidadmedida" class="col-sm-2 control-label">Unidad de Medida</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="Umedida">
                      <option @if ($producto->Umedida == 'Caja') Selected @endif>Caja</option>
                      <option @if ($producto->Umedida == 'Charola') Selected @endif>Charola</option>
                      <option @if ($producto->Umedida == 'Paquete') Selected @endif>Paquete</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="minstock" class="col-sm-2 control-label">Mínimo en Stock</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" id="stock" name="stock" placeholder="Mínimo Stock" value="{{ $producto->stock }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="precio" class="col-sm-2 control-label">Precio $</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio" value="{{ $producto->precio }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="p25" class="col-sm-2 control-label">Precio$ 25%</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" id="precioP25" name="precioP25" placeholder="Precio 25%" value="{{ $producto->P25 }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="p29" class="col-sm-2 control-label">Precio$ 29%</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" id="precioP29" name="precioP29" placeholder="Precio 29%" value="{{ $producto->P29 }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="p30" class="col-sm-2 control-label">Precio$ 30%</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" id="precioP30" name="precioP30" placeholder="Precio 30%" value="{{ $producto->P30 }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="p35" class="col-sm-2 control-label">Precio$ 35%</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" id="precioP35" name="precioP35" placeholder="Precio 35%" value="{{ $producto->P35 }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="p40" class="col-sm-2 control-label">Precio$ 40%</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" id="precioP40" name="precioP40" placeholder="Precio 40%" value="{{ $producto->P40 }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="p40" class="col-sm-2 control-label">Excento de Descuento</label>
                  <div class="col-sm-6">
                       <input type="checkbox" class="form-check-input" id="ExcentoDescuento" name="ExcentoDescuento"  @if($producto->ExcentoDescuento == 1) checked="true" @endif>
                  </div>
                </div>


                  <button type="submit" class="btn btn-primary"> Actualizar Producto

                  </button>

        </form>
    </div>
</div>

@stop
