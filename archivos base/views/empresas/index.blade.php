@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de empresas</h1></div>
				<div class="pull-right"><a href="empresas/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>
			@include('empresas.find')
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center text-info">Id</th>
						<th class="text-center text-info">Razón Social</th>
						<th class="text-center text-info">Tipo empresa</th>
						<th class="text-center text-info">Domicilio</th>
						<th class="text-center text-info">Status</th>
						<th class="text-center text-info">Plaza</th>
						<th class="text-center text-info">Nombre corto</th>
						<th class="text-center text-info">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
					
					<tbody>
						@foreach($empresas as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->razon_social }}</td>							
							<td class="text-center">
							@if ($item->tipo_empresa=='Facturadora')	
								<span class="fa fa-bank"> {{ $item->tipo_empresa }}</span></td>								
							@else
								<span class="fa fa-cc-visa"> {{ $item->tipo_empresa }}</span></td>							
							@endif

							<td>{{ $item->domicilio }}</td>	
							
							<td class="text-center">

							@if ($item->status=='Activa')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>
							<td>{{ $item->plaza->descripcion }}</td>
							<td>{{ $item->nombre_corto }}</td>
							

							<td style="text-align: center">
                              @include('empresas.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 <div class="text-center">{{ $empresas->render()}}</div>
			</div>
		</div>
	</div>	
@endsection