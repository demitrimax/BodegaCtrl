<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Control de Bodega | Reporte de Inventario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>

<div class="wrapper">

<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            Control de Bodega Online
            <small class="pull-right">Fecha: {{ date('d-m-Y', strtotime($fecharep))  }} </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12">
          <table class="table table-condensed table-sm" style="font-size:10px">
            <thead>
            <tr>
              <th>Producto</th>
              <th>Saldo Inicial</th>
              <th>Entradas</th>
              <th>Cant. Acumulada</th>
              <th>Salidas</th>
              <th>Stock Final</th>
            </tr>
            </thead>
            <tbody>
          @foreach ($rep_inventario as $producto)
            <tr style="height:15px">
              <td>{{$producto->Nproducto}}</td>
              <td class="text-center">{{$producto->saldo_inicial}}</td>
              <td class="text-center">{{$producto->entradas}}</td>
              <td class="text-center">{{$producto->cant_acum}}</td>
              <td class="text-center">{{$producto->salidas}}</td>
              <td class="text-center">{{$producto->stockreal}}</td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                  <th class="text-center">TOTALES</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('saldo_inicial') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('entradas') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('cant_acum') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('salidas') }}</th>
                  <th class="text-center">{{ collect($rep_inventario)->sum('stockreal') }}</th>
                </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  </div>
</body>
</html>
