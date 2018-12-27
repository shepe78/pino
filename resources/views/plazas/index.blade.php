@extends('layouts.principal')

@section('content')
<div class="card card-primary card-outline">
  <div class="card-header with-border">
    <h1 class="card-title">Listado de plazas</h1>
    <div class="card-tools pull-right">
      <div class="pull-right"><a href="plazas/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i> Nuevo registro</button></a></div>	
      
    </div>
    @include('plazas.find')
  </div>
  <!-- /.box-header -->
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm">
		<thead style="background-color: #039BE5">
			<th class="text-center text-white">Id</th>
			<th class="text-center text-white">Descripción</th>
			<th class="text-center text-white">Acciones</th>	
		</thead>
		<span style="color: #039BE5">Total de registros: {{ $plazas->count() }}</span>
		<tbody>
			@foreach($plazas as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->descripcion }}</td>

				<td style="text-align: center">
                  @include('plazas.acciones')                          
              </td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </div>
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="text-center">{{ $plazas->render()}}</div>
  </div>
	
@endsection