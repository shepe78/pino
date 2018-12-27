@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado General de Esquemas</h1></div>
				<div class="pull-right"><a href="esquemas/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
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
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center letras">Id</th>
						<th class="text-center letras">Cliente</th>
						<th class="text-center letras">Emisora</th>
						<th class="text-center letras">Remuneradora</th>						
						<th class="text-center letras">Producto</th>						
						<th class="text-center letras">Concepto</th>
						<th class="text-center letras">Fecha inicial</th>
						<th class="text-center letras">Comisión</th>
						<th class="text-center letras">Status</th>					
						<th class="text-center letras">Acciones</th>	
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
							<td>{{ $item->concepto }}</td>	
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
	</div>	
@endsection