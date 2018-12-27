Form::open(['route' => ['seguimientos.destroy', $item->id], 'method' => 'delete'])
<div class='btn-group'>
    <a href="{{ route('seguimientos.show', $item->id) }}" title="editar">
        <i class="btn btn-info fa fa-pencil"></i>
    </a>
    <a href="{{ route('seguimientos.edit', $item->id) }}" title="Editar" '>
        <i class="btn btn-success fa fa-edit"></i>
    </a> 

    @if (auth()->user()->id == $item->usuario_id)
    
    Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'title'=> 'eliminar',
        'class'=> 'btn-danger',
        'onclick' => "return confirm('Esta seguro de eliminar el registro?')"
    ])

    @else
    @endif

</div>
Form::close()