<div class="container-fluid">
  <h3 class="text-info">{{ $cliente->razon_social }}</h3>
  <div class="card mb-12">
    <div class="card-body text-dark">
      <div id="myTabContent" class="tab-content">
        <style>
          .text-white {
            color: #E1D8D8;
            font-family: 'verdana';
            font-weight: bold;
            font-size: 15px;                            
                  } 
        </style>
     
        @include('clientes.parciales.esquemas.navegacion')

          <div class="tab-pane fade" id="Ave">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>                            
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($avee as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="Daikon">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($daikone as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="DYC">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($dyce as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="Centro">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($centroe as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="Aljez">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th> 
                  <th class="text-center text-white">Contrato</th>         
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($aljeze as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="Busnes">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($busnese as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade active" id="Ingenia">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($ingeniae as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="S4U">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>  
                  <th class="text-center text-white">Contrato</th>        
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($s4ue as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td>
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="Aportaciones">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th> 
                  <th class="text-center text-white">Contrato</th>         
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($aportacionese as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="Enterprise">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($enterprisee as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>
          <div class="tab-pane fade" id="LV">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th> 
                  <th class="text-center text-white">Contrato</th>         
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($lve as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>          
          <div class="tab-pane fade" id="Consorcio">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($consorcioe as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>

          <div class="tab-pane fade" id="TT">
            <div class="card-body text-dark">
              <table class="table table-bordered table-striped table-hover table-sm">
                <thead  style="background-color: #039BE5">
                  <th class="text-center text-white">Id</th>          
                  <th class="text-center text-white">Remuneradora</th>            
                  <th class="text-center text-white">Producto</th>            
                  <th class="text-center text-white">Concepto</th>
                  <th class="text-center text-white">Fecha inicial</th>
                  <th class="text-center text-white">Comisión</th>
                  <th class="text-center text-white">Status</th>
                  <th class="text-center text-white">Contrato</th>          
                  <th class="text-center text-white">Acciones</th>  
                </thead>
                  {{-- <span class="text-info">Total de registros: {{ $ingeniae->registros }}</span> --}}
                <tbody>
                  <tr>
                    @foreach($tte as $item)
                      <td>{{ $item->id }}</td>  
                      <td>{{ $item->pagadora->razon_social }}</td>
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
                      <td class="text-center">
                      @if($item->contrato==null)              
                            @else
                              <span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->contrato }} "target=blank" class="card-Contrato">&nbsp Contrato</a></span>
                            @endif
                      </td>
                      <td style="text-align: center">
                        @include('esquemas.acciones')                          
                      </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>         
          </div>                                              
      </div>
    </div>            
  </div>
</div>

