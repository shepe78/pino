@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de Clientes</h1></div>
				<div class="pull-right"><a href="clientes/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>
			@include('clientes.find')
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center text-info">Id</th>
						<th class="text-center text-info">Razon Social</th>
						<th class="text-center text-info">Nombre Comercial</th>
						<th class="text-center text-info">Tipo de cliente</th>
						<th class="text-center text-info">Persona</th>
						<th class="text-center text-info">Status</th>
						<th class="text-center text-info">Plaza</th>
						<th class="text-center text-info">Promotor</th>
						<th class="text-center text-info">Analista</th>
						<th class="text-center text-info">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
					
					<tbody>
						@foreach($clientes as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->razon_social }}</td>							
							<td>{{ $item->nombre_comercial }}</td>

							<td class="text-center">
							@if ($item->tipo_cliente=='Directo')	
								<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
							@elseif($item->tipo_cliente=='Indirecto')
								<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
							@elseif($item->tipo_cliente=='Prospecto')
								<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
							@endif

							<td>{{ $item->persona }}</td>

													
							<td class="text-center">

							@if ($item->status=='Activo')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>
							<td>{{ $item->plaza->descripcion }}</td>
							<td>{{ $item->promotor->nombre }}</td>
							<td>{{ $item->analista->nombre }}</td>
							

							<td style="text-align: center">
                              @include('clientes.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 {{-- <div class="text-center">{{ $clientes->render()}}</div> --}}
			</div>
		</div>
	</div>	
@endsection