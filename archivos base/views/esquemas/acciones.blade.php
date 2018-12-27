{!! Form::open(['route' => ['esquemas.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {{-- <a href="{{ route('esquemas.show', $item->id) }}" title="editar">
        <i class="btn btn-info fa fa-pencil"></i>
    </a> --}}
    <a href="{{ route('esquemas.edit', $item->id) }}" title="Editar" '>
        <i class="btn btn-success fa fa-edit"></i>
    </a>

     {{-- @if(auth()->user()->tipo=='comercial')
        {!!Form::model($contrato,['method'=>'PATCH','route'=>['contratos.registrar',[$item->clienteid, $item->facturadora_id] ]])!!}
        {{Form::token()}}  
          <div class="form-group col-md-12 pull-right">
          <button class="btn btn-primary" type="submit">Solicitar</button>
        {!!Form::close()!!} 
      @endif --}}



       
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'title'=> 'eliminar',
        'class'=> 'btn-danger',
        'onclick' => "return confirm('Esta seguro de eliminar el registro?')"
    ]) !!}

</div>
{!! Form::close() !!}