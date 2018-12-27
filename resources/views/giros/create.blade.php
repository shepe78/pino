@extends('layouts.principal')
@section('content')
<div class="container col-md-6">
  <div class="card">
    <div class="card-header" style="background-color: #039BE5"><h3 class="card-title text-white">Registro de un nuevo Giro Comercial</h3></div>
    <div class="card-body text-dark">
      {!!Form::open(array('route'=>'giros.store', 'method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

            
              <div class="form-group col-md-10">
                <label style="color: #1380B9" for="descripcion">Ingrese el nombre del giro:</label>
                <input type="text" name="descripcion" class="form-control" placeholder="giro..." required="true">
              </div>
    </div>
             
    <div class="card-footer"> 
      <div class="form-group col-md-12 pull-right">
        <button class="btn btn-primary" type="submit">Guardar</button>
          <a href="{{ route('giros.index') }}" class="btn btn-danger">Cancelar</a>
      </div>

      {!!Form::close()!!}
    </div>  
            
  
</div>
</div>
@endsection