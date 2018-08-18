@extends('admin.layout')
@section('titulo-pagina','Info: '. $cliente->Nombre )

@section('client-active','active')

@section('float-sm-right')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
          <li>Clientes</li>
          <li class="active">Detalles del Cliente</li>
        </ol>
@endsection
@section('content')

            <!-- general form elements -->
            <div class="box">
              <div class="box-header">

          <div class="row">
            <div class="col-md-6">
            <!-- Widget: user widget style 2 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                  <img class="img-circle" src="{{ url('adminlte/img/no-image-icon.png') }}" alt="Imagen del Producto">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">{{ $cliente->Nombre }}</h3>
                <h5 class="widget-user-desc">{{ $cliente->RFC }}</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Edad <span class="pull-right badge bg-blue"> Desconocida </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Fecha de Nacimiento: <span class="pull-right badge bg-blue"> Desconocido </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Porcentaje de Descuento <span class="pull-right badge bg-blue">{{ $cliente->PorcDescuento }}</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
                    <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ $cliente->PorcDescuento }}</h3>

                <p>Porcentaje de Descuento</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                Detalles de las ventas <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>$1,550</h3>

                <p>$ en productos vendidos</p>
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