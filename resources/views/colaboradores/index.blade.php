@extends('layouts.principal')

@section('content')
<div class="card card-primary card-outline col-12">
  <div class="card-header with-border">
    <h1 class="card-title">Listado de colaboradores</h1>
    <div class="card-tools pull-right">
      <div class="pull-right"><a href="colaboradores/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i> Nuevo registro</button></a></div>	
      
    </div>
    @include('colaboradores.find')
  </div>
  <!-- /.box-header -->
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm">
		<thead style="background-color: #039BE5">
			<th class="text-center text-white">Id</th>
				<th class="text-center text-white">Nombre</th>
				<th class="text-center text-white">Tipo de colaborador</th>
				{{-- <th class="text-center text-info">Domicilio</th> --}}
				<th class="text-center text-white">Email</th>
				<th class="text-center text-white">Status</th>
				<th class="text-center text-white">Plaza</th>
				<th class="text-center text-white">Telefono</th>
				<th class="text-center text-white">Celular</th>
				<th class="text-center text-white">Acciones</th>					
		</thead>
		<span style="color: #039BE5">Total de registros: {{ $registros }}</span>
		<example-component></example-component>
		<tbody>
			@foreach($colaboradores as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->nombre }}</td>							
					<td class="text-center">
					@if ($item->tipo_colaborador=='Promotor')	
						<span class="fa fa-coffee text-info"> {{ $item->tipo_colaborador }}</span></td>								
					@elseif($item->tipo_colaborador=='Analista')
						<span class="fa fa-search text-info"> {{ $item->tipo_colaborador }}</span></td>
					@else
						<span class="fa fa-briefcase text-info"> {{ $item->tipo_colaborador }}</span></td>								
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
  </div>
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="text-center">{{ $colaboradores->appends(Request::only(['nombre','tipo','plaza_id']))->render() }}</div>
  </div>
	
@endsection