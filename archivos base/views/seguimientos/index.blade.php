@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de Seguimientos</h1></div>
				<div class="pull-right"><a href="seguimientos/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>

			<style>
            .letras {
                      color: #835223;
                      font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;
                      
                  } 

            .icono{
            	color: #2B648C;
            }      
            </style>

			{{-- @include('seguimientos.find') --}}
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center letras">Id</th>						
						<th class="text-center letras">Cliente</th>
						<th class="text-center letras">Tipo de comentario</th>
						<th class="text-center letras">Fecha / Hora</th>						
						<th class="text-center letras">Usuario</th>											
						<th class="text-center letras">Acciones</th>	
					</thead>
					<span class="letras">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($seguimientos as $item)
							<td class="icono text-center">{{ $item->id }}</td>	
							<td>{{ $item->cliente['razon_social'] }}</td>								
							<td class="text-center">
							@if ($item->tipo_seguimiento =='Email')
								<span class="fa fa-envelope icono">&nbsp{{ $item->tipo_seguimiento }}</td></span>
							@elseif($item->tipo_seguimiento == 'Visita')
								<span class="fa fa-car icono">&nbsp {{ $item->tipo_seguimiento }}</span>
							@elseif($item->tipo_seguimiento == 'Llamada')
								<span class="fa fa-volume-control-phone icono">&nbsp {{ $item->tipo_seguimiento }}</span>
							@endif
							</td>

							<td>{{ date('d-m-Y  g:i a',strtotime ($item->fecha)) }}</td>	
							
							<td>{{ $item->user['name'] }}</td>
														
							<td style="text-align: center">
                              @include('seguimientos.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 
			</div>
		</div>
	</div>	
@endsection