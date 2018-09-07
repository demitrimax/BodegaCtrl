<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Control de Bodega | Reporte Financiero</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
<section class="invoice">
  <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> Reporte Financiero {{ $tiendaNombre->nomtienda }}
              <small class="pull-right">Fecha: {{ date('d-m-Y', strtotime($fecharep))  }}</small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">GASTOS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Descripción</th>
                  <th class="text-right">Monto</th>
                </tr>
              @foreach($gastos as $key=>$gasto)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$gasto->descripcion}}</td>
                  <td class="text-right">{{number_format($gasto->monto,2)}}</td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-right">
              <strong>Total: </strong> {{ number_format(collect($gastos)->sum('monto')) }}
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">ABONOS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Descripción</th>
                  <th class="text-right">Monto</th>
                </tr>
                @foreach($abonos as $key=>$abono)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$abono->descripcion}}</td>
                  <td class="text-right">{{ number_format($abono->monto,2)}} </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-right">
              <strong>TOTAL: </strong> {{ number_format(collect($abonos)->sum('monto')) }}
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-6">
        </div>

            <div class="col-xs-6">
              <div class="box">
                <div class="box-body">
          <p class="lead">TOTALES </p>

          <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th style="width:50%">Total de Ventas:</th>
                <td>${{ number_format(collect($ventas)->sum('monto'),2) }}</td>
              </tr>
              <tr>
                <th>GASTOS</th>
                <td>${{ number_format(collect($gastos)->sum('monto'),2) }}</td>
              </tr>
              <tr>
                <th>SUBTOTAL</th>
                <td>$ {{ number_format(collect($ventas)->sum('monto') - collect($gastos)->sum('monto'),2) }}</td>
              </tr>
              <tr>
                <th>ABONOS</th>
                <td>$ {{ number_format(collect($abonos)->sum('monto'),2) }}</td>
              </tr>
              <tr>
                <th>GRAN TOTAL:</th>
                <td>${{ number_format(collect($ventas)->sum('monto')+collect($abonos)->sum('monto')-collect($gastos)->sum('monto'),2) }}</td>
              </tr>
            </tbody></table>
          </div>
        </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- ./wrapper -->
  </body>
  </html>
