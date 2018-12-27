<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de empleados</h1></div>
				<div class="pull-right"><a href="empleados/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>
			@include('empleados.find')
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center text-info">Id</th>
						<th class="text-center text-info">Nombre del empleado</th>
						
						<th class="text-center text-info">Status</th>																	
						<th class="text-center text-info">Acciones</th>	
					</thead>
					{{-- <span class="text-info">Total de registros: {{ $no_empleados }}</span> --}}
					
					<tbody>
						@foreach($empleados as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->nombre }}</td>
																	
							
							<td class="text-center">
							@if ($item->status=='Activo')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>				
							

							<td style="text-align: center">
                              @include('empleados.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 
			</div>
		</div>
	</div>


