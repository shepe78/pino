@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de colaboradores</h1></div>
				<div class="pull-right"><a href="colaboradores/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>
			@include('colaboradores.find')
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center text-info">Id</th>
						<th class="text-center text-info">Nombre</th>
						<th class="text-center text-info">Tipo de colaborador</th>
						{{-- <th class="text-center text-info">Domicilio</th> --}}
						<th class="text-center text-info">Email</th>
						<th class="text-center text-info">Status</th>
						<th class="text-center text-info">Plaza</th>
						<th class="text-center text-info">Telefono</th>
						<th class="text-center text-info">Celular</th>
						<th class="text-center text-info">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
					
					<tbody>
						@foreach($colaboradores as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->nombre }}</td>							
							<td class="text-center">
							@if ($item->tipo_colaborador=='Promotor')	
								<span class="fa fa-coffee"> {{ $item->tipo_colaborador }}</span></td>								
							@elseif($item->tipo_colaborador=='Analista')
								<span class="fa fa-search"> {{ $item->tipo_colaborador }}</span></td>
							@else
								<span class="fa fa-briefcase"> {{ $item->tipo_colaborador }}</span></td>								
							@endif

							{{-- <td>{{ $item->domicilio }}</td> --}}
							<td>{{ $item->email }}</td>	
							
							<td class="text-center">

							@if ($item->status=='Activo')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>
							<td>{{ $item->plaza->descripcion }}</td>
							<td>{{ $item->telefono }}</td>
							<td>{{ $item->celular }}</td>
							

							<td style="text-align: center">
                              @include('colaboradores.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 <div class="text-center">{{ $colaboradores->render()}}</div>
			</div>
		</div>
	</div>	
@endsection