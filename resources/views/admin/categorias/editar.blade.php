@extends('admin.layout')
@section('categorias-active','active')
@section('titulo-pagina','Categoría '.$categoria->nombre)
@section('float-sm-right')
      <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Editar Categoría</li>
          <li class="breadcrumb-item"><a href="{{url('admin/clientes/')}}">Principal</a></li>
      </ol>
@endsection
@section('content')

            <div class="col-sm-6">
            <!-- general form elements -->
            <div class="box mb-3">
              <div class="box-header">

                 @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                  @endif


            <form role="form" method="post" action="{{ url('/admin/categorias/'.$categoria->id.'/actualizar') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Categoría</h3>
              </div>
              <div class="card-body">
                <div class="input-group sm-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nombre de la categoría" name="nombre" value="{{$categoria->nombre}}" maxlength="15" required>
                </div>

                <div class="input-group sm-3">
                  <div class="input-group-append">
                  	   <span class="input-group-text">Descripción</span>
                  		</div>
                  		<input type="text" class="form-control" placeholder="Descripción de la categoría" name="descripcion" maxlength="200" required value="{{$categoria->descripcion}}">
                </div>
                <div class="form-group sm-3">
                    <label>Foto</label>
                    <input type="file" id="foto" name="foto">
                  </div>



                  <button type="submit" class="btn btn-block btn-primary"> Editar

                  </button>


                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
        </form>
    </div>
</div>
</div>

@stop