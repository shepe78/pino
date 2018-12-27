@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header"><h3 style="color: blue" class="card-title">Edición del grupo</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['grupos.update',$grupo], 'method'=>'PUT'])!!}
            {{Form::token()}}

            <div class="row">{{--  fila # 1 --}}
              <div class="form-group col-md-6">
                <label style="color: brown" for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{$grupo->descripcion}}" required="true">
              </div>

             
            <div class="form-group col-md-12 pull-right">
              <button class="btn btn-primary" type="submit">Guardar</button>
              <a href="{{ route('grupos.index') }}" class="btn btn-danger">Cancelar</a>
            </div>

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection