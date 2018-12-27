@if($cliente->expediente->acta_nacimiento==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->acta_nacimiento }}" class="card-link "target=blank">&nbsp Acta Nacimiento</a></span>
<br>
@endif

@if($cliente->expediente->curp==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->curp }}" class="card-link "target=blank">&nbsp Curp</a></span>
<br>
@endif

@if($cliente->expediente->identificacion==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->identificacion }}" class="card-link "target=blank">&nbsp Identificacion</a></span>
<br>
@endif

@if($cliente->expediente->cedula_rfc==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->cedula_rfc }}" class="card-link "target=blank">&nbsp Cedula RFC</a></span>
<br>
@endif

@if($cliente->expediente->comprobante_domicilio==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->comprobante_domicilio }}" class="card-link "target=blank">&nbsp Comprobante de domicilio</a></span>
<br>
@endif


@if($cliente->expediente->documento_migratorio==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->documento_migratorio }}" class="card-link "target=blank">&nbsp Documento migratorio</a></span>
<br>
@endif

@if($cliente->expediente->acta_constitutiva==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->acta_constitutiva }}" class="card-link "target=blank">&nbsp Acta constitutiva</a></span>
<br>
@endif

@if($cliente->expediente->porder_notarial==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->poder_notarial }}" class="card-link "target=blank">&nbsp Poder Notarial</a></span>
<br>
@endif

@if($cliente->expediente->cuestionario==null)
@else
<span class="fa fa-download" data-toggle="tooltip"></span>
<span class="text-muted small text-truncate"><a href="../expedientesf/{{ $cliente->expediente->cuestionario }}" class="card-link "target=blank">&nbsp Cuestionario </a></span>
<br>
@endif
