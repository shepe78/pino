@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de contactos</h1></div>
				<div class="pull-right"><a href="contactos/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>
			@include('contactos.find')
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center text-info">Id</th>
						<th class="text-center text-info">Nombre</th>
						<th class="text-center text-info">Puesto</th>						
						<th class="text-center text-info">Email</th>
						<th class="text-center text-info">Cliente</th>
						<th class="text-center text-info">Status</th>						
						<th class="text-center text-info">Telefono</th>						
						<th class="text-center text-info">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($contactos as $item)
							<td>{{ $item->id }}</td>	
							<td>{{ $item->nombre }}</td>
							<td>{{ $item->puesto }}</td>	
							<td>{{ $item->email }}</td>
							<td>{{ $item->cliente ['razon_social'] }}</td>
							
							<td class="text-center">

							@if ($item->status=='Activo')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>
							<td>{{ $item->telefono }}</td>
							
							

							<td style="text-align: center">
                              @include('contactos.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 <div class="text-center">{{ $contactos->render()}}</div>
			</div>
		</div>
	</div>	
@endsection