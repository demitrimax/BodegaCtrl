@extends('admin.layout')
@section('titulo-pagina','Info: '. $producto->nombre )
@section('float-sm-right')
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Editar Productos</li>
              <li class="breadcrumb-item"><a href="{{url('admin/productos/')}}">Principal</a></li>
            </ol>
          </div>
@endsection
@section('content')

            <!-- general form elements -->
            <div class="card">
              <div class="card-header">

          <div class="row">
            <div class="col-md-6">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="{{ url('adminlte/img/no-image-icon.png') }}" alt="Imagen del Producto">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">{{ $producto->nombre }}</h3>
                <h5 class="widget-user-desc">{{ $producto->descripcion }}</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Unidad de Medida <span class="float-right badge bg-primary">{{ $producto->Umedida }}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio <span class="float-right badge bg-info">{{ $producto->precio }}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio 20% <span class="float-right badge bg-info">{{ $producto->P20 }}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio 25% <span class="float-right badge bg-info">{{ $producto->P25 }}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio 29% <span class="float-right badge bg-info">{{ $producto->P29 }}</span>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio 30% <span class="float-right badge bg-info">{{ $producto->P30 }}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio 35% <span class="float-right badge bg-info">{{ $producto->P35 }}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Precio 40% <span class="float-right badge bg-info">{{ $producto->P40 }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
                    <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$producto->stock}}</h3>

                <p>Cantidad en Stock</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                Detalles del inventario <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Vendidos Hoy</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                Ventas de Hoy <i class="ion ion-pie-graph"></i>
              </a>
            </div>
          </div>

    </div>
</div>
</div>

@stop