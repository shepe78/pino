{!! Form::open(['route' => ['clientes.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('clientes.show', $item->id) }}" title="detalles">
        <i class="btn btn-info fa fa-search"></i>
    </a>
    <a href="{{ route('clientes.edit', $item->id) }}" title="Editar" '>
        <i class="btn btn-success fa fa-edit"></i>
    </a>
    
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'title'=> 'eliminar',
        'class'=> 'btn-danger',
        'onclick' => "return confirm('Esta seguro de eliminar el registro?')"
    ]) !!}

</div>
{!! Form::close() !!}