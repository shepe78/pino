{!! Form::open(['route' => ['empresas.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {{-- <a href="{{ route('empresas.show', $item->id) }}" title="editar">
        <i class="btn btn-info fa fa-pencil"></i>
    </a> --}}
    <a href="{{ route('empresas.edit', $item->id) }}" title="Editar" '>
        <i class="btn btn-success fa fa-edit"></i>
    </a>
     <a href="#" title="Firmas" '>
        <i class="btn btn-info fa fa-pencil"></i>
    </a>

    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'title'=> 'eliminar',
        'class'=> 'btn-danger',
        'onclick' => "return confirm('Esta seguro de eliminar el registro?')"
    ]) !!}

</div>
{!! Form::close() !!}