@extends('layouts.principal')

@section('content')
<div class="container col-md-6">
<div class="card">
  <div class="card-header" style="background-color: #039BE5">
    <h1 class="card-title">Edicion del registro</h1>
  </div>
      

  <!-- /.box-header -->
  <div class="card-body">
    {!!Form::open(['route'=> ['choferes.update',$chofer], 'method'=>'PUT'])!!}
            {{Form::token()}}

            <div class="row">
              <div class="form-group col-md-6">
                <label style="color: #1380B9" for="nombre">Nombre del chofer:</label>
                <input type="text" name="nombre" class="form-control" value="{{$chofer->nombre}}" required="true">
              </div>
            </div> 
            <div class="row">                 
                  <div class="form-group col-sm-3">
                  {!! Form::label('status', 'Status:', ['class' => 'letras']) !!}
                  {!! Form::select('status', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'], $chofer->status, ['class' => 'form-control']) !!}
                  </div>
            </div>   
  </div>
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="form-group col-md-12 pull-right">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <a href="{{ route('choferes.index') }}" class="btn btn-danger">Cancelar</a>
    </div>

    {!!Form::close()!!}
    
  </div>
</div>
</div>
  
@endsection        