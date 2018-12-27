{!! Form::open(['route' => ['contactos.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {{-- <a href="{{ route('contactos.show', $item->id) }}" title="editar">
        <i class="btn btn-info fa fa-pencil"></i>
    </a> --}}
    <a href="{{ route('contactos.edit', $item->id) }}" title="Editar" '>
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