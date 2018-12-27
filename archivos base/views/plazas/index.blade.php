@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de plazas</h1></div>
				<div class="pull-right"><a href="plazas/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>
			@include('plazas.find')
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center text-info">Id</th>
						<th class="text-center text-info">Descripción</th>
						<th class="text-center text-info">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
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
				 <div class="text-center">{{ $plazas->render()}}</div>
			</div>
		</div>
	</div>	
@endsection