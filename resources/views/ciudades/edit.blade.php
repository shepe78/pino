@extends('layouts.principal')

@section('content')
<div class="container col-md-6">
<div class="card">
  <div class="card-header" style="background-color: #039BE5">
    <h1 class="card-title">Edicion del registro</h1>
  </div>
      

  <!-- /.box-header -->
  <div class="card-body">
    {!!Form::open(['route'=> ['ciudades.update',$ciudad], 'method'=>'PUT'])!!}
            {{Form::token()}}

            <div class="row">{{--  fila # 1 --}}
              <div class="form-group col-md-6">
                <label style="color: #1380B9" for="descripcion">Nombre de la ciudad:</label>
                <input type="text" name="descripcion" class="form-control" value="{{$ciudad->descripcion}}" required="true">
              </div>
            </div>   
  </div>
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="form-group col-md-12 pull-right">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <a href="{{ route('ciudades.index') }}" class="btn btn-danger">Cancelar</a>
    </div>

    {!!Form::close()!!}
    
  </div>
</div>
</div>
  
@endsection        