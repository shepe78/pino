@extends('layouts.principal')

@section('content')	
		<div class="card card-primary card-outline col-12">
			<div class="card-header whit-border">
				<h2>Listado de Esquemas</h2>
				<div class="card-tools pull-right">				
				<div class="pull-right"><a href="esquemas/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i>Nuevo Esquema</button></a></div>
			</div>
				 				
			</div>

			<style>
            .letras {
                      color: #835223;
                      font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;
                      
                  }
            .columna{
						width: 110px;
  						          }

  						                 
            </style>

			@include('esquemas.find')
			<div class="card-body">
				<table class="table table-bordered table-striped table-hover table-sm">
					<thead style="background-color: #039BE5">
						<th class="text-center text-white">Id</th>
						<th class="text-center text-white">Cliente</th>
						<th class="text-center text-white">Emisora</th>
						<th class="text-center text-white">Remuneradora</th>						
						<th class="text-center text-white">Producto</th>						
						<th class="text-center text-white">Concepto</th>
						<th class="text-center text-white">Fecha inicial</th>
						<th class="text-center text-white">Comisión</th>
						<th class="text-center text-white">Status</th>					
						<th class="text-center text-white">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($esquemas as $item)
							<td>{{ $item->id }}</td>	
							<td>{!! $item->cliente['razon_social']!!}</td>
							<td>{{ $item->facturadora->nombre_corto }}</td>	
							<td>{{ $item->pagadora->nombre_corto }}</td>
							<td>{{ $item->producto }}</td>	
							<td>{{ str_limit($item->concepto,60) }}</td>	
							<td class="text-center columna">{{ date('d-m-Y',strtotime ($item->fecha_inicio)) }}</td>
							<td class="text-center">{{ $item->comision}} %</td>
														
							<td class="text-center">

							@if ($item->status=='Vigente')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>
							
							<td style="text-align: center">
                              @include('esquemas.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 <div class="text-center">{{ $esquemas->render()}}</div>
			</div>
		</div>

@endsection