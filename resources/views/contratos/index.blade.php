@extends('layouts.principal')

@section('content')
  
<div class="container-fluid">
        <div class="card border-primary mb-12">
                <div class="card-header">
                  <h2>Seguimiento a contratos</h2>
                  <div><p></p></div>
                  @if(auth()->user()->tipo=='comercial')
                  <a href="contratos/create"><button class="btn btn-primary" title="crear">Ingresar nueva solicitud</button></a>
                  @else
                  <p></p>
                  @endif
                </div>
                <div class="card-body text-dark">
                
                <ul class="nav nav-tabs">

                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Solicitados">Solicitados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Rechazados">Rechazados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Validados">Validados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Liberados">Liberados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#EnFirmaRL">En Firma por RL</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#FirmadosRL">Firmados por el RL</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#EnFirmaCliente">En Firma por el Cliente</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#FirmadosCliente">Firmados por el Cliente</a>
                  </li>                  
                </ul>

                <div id="myTabContent" class="tab-content">
                  
                  <div class="tab-pane fade show active" id="Solicitados">

                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th class="text-center">Registro</th>
                          {{-- <th colspan="2">Rechazo (1)   /   Dias</th>
                          <th colspan="2">Reenvio (1)   /   Dias</th>
                          <th colspan="2">Aceptado (2)   /   Dias</th>
                          <th colspan="2">Liberacion (2)   /   Dias</th>
                          <th colspan="2">Firma RL (7)   /   Dias</th>
                          <th colspan="2">Firma Cliente (30)   /   Dias</th> --}}
                          <th class="text-center">acciones</th>
                          
                          
                        </thead>
                        @foreach($solicitados as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            {{-- <td>
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_rechazo <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_aceptado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_aceptado)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>



                            <td>
                              @if ( $contrato->f_liberacion == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberacion)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                            <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             
                              <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-trash" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                             &nbsp
                             @else
                             @endif
                             {{-- 
                              <a class="fa fa-plus" title="Envia CL" href="{{URL::action('ContratoController@envia_firma_cl',$contrato->id)}}"> </button></a>
                              &nbsp --}}
                              
                              {{-- <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              &nbsp --}}
                              @if(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-times" title="Rechazar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a> 
                              &nbsp

                              <a class="fa fa-thumbs-up" title="Validar" href="{{URL::action('ContratoController@validar',$contrato->id)}}"> </button></a>
                              &nbsp
                              {{-- <a class="fa fa-engage" title="Enviar RL" href="{{URL::action('ContratoController@envia_firma_rl',$contrato->id)}}"> </button></a>
                              &nbsp --}}
                              {{-- @elseif(auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@liberar',$contrato->id)}}"> </button></a>--}}
                              @else
                              @endif 
                              
                            </td>                                       
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div>  
                  </div>
                  
                  <div class="tab-pane fade" id="Rechazados">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th class="text-center">Registro</th>
                          <th class="text-center" colspan="2">Rechazo (1)   /   Dias</th>
                          {{-- <th colspan="2">Reenvio (1)   /   Dias</th>
                          <th colspan="2">Aceptado (2)   /   Dias</th>
                          <th colspan="2">Liberacion (2)   /   Dias</th>
                          <th colspan="2">Firma RL (7)   /   Dias</th>
                          <th colspan="2">Firma Cliente (30)   /   Dias</th> --}}
                          <th class="text-center">acciones</th>
                          
                          
                        </thead>
                        @foreach($rechazados as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_rechazo <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            {{-- <td>
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_aceptado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_aceptado)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>



                            <td>
                              @if ( $contrato->f_liberacion == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberacion)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                            <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              

                              <a class="fa fa-trash" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              @else
                              @endif
                             
                              
                            </td>                                       
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="Validados">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th class="text-center">Registro</th>
                          <th colspan="2">Rechazo (1)   /   Dias</th>
                          <th colspan="2">Reenvio (1)   /   Dias</th>
                          <th colspan="2">Aceptado (2)   /   Dias</th>{{-- 
                          <th colspan="2">Liberacion (2)   /   Dias</th>
                          <th colspan="2">Firma RL (7)   /   Dias</th>
                          <th colspan="2">Firma Cliente (30)   /   Dias</th> --}}
                          <th class="text-center">acciones</th>
                          
                          
                        </thead> 
                        @foreach($validados as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td>
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            @if ( $contrato->f_rechazo == null )
                               <td>-</td>
                               <td>-</td> 
                            @else
                            <td><i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i></td>

                            <td>
                              @if ($contrato->dias_rechazo <= 1)
                                  <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>  
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            @endif


                           <!--  <td>
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td> -->

                            <!-- <td>
                              @if ($contrato->dias_rechazo <= 2)
                                  <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>  
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td> -->




                            <!-- <td>
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td> -->

                             @if ( $contrato->f_reenvio == null )
                               <td>-</td>
                               <td>-</td> 
                            @else
                            <td><i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i></td>

                            <td>
                              @if ($contrato->dias_reenvio <= 1)
                                  <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>  
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            @endif 




                            <td>
                              @if ( $contrato->f_validado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_validado)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>


                        {{-- 
                            <td>
                              @if ( $contrato->f_liberacion == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberacion)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                             <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             
                              
                              @if (auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              @else
                              @endif
                              
                            </td>                                        
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div> 
                  </div>


                  <div class="tab-pane fade" id="Liberados">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th>Registro</th>
                          <th class="text-center" colspan="2">Rechazo (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Reenvio (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Aceptado (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Liberado (2)   /   Dias</th>
                          <th class="text-center">acciones</th>
                          
                          
                        </thead>
                        @foreach($liberados as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_rechazo <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_validado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_validado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_validado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_validado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_validado }}</p>
                              @endif  
                            </td>



                            <td>
                              @if ( $contrato->f_liberado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            {{-- <td>
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>

                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                             <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             
                             {{--  <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-pencil" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-times" title="Rechazar" href="{{URL::action('ContratoController@rechazar',$contrato->id)}}"> </button></a> 
                              &nbsp

                              <a class="fa fa-thumbs-up" title="Aceptar" href="{{URL::action('ContratoController@aceptar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@liberar',$contrato->id)}}"> </button></a>
                              @endif
                               --}}
                              @if(auth()->user()->tipo=='juridico')
                              <a class="fa fa-inbox" title="Enviar RL" href="{{URL::action('ContratoController@envia_firma_rl',$contrato->id)}}"> </button></a>
                              @else
                              <p></p>
                              @endif

                            </td>                                       
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div> 
                  </div>

                  <div class="tab-pane fade" id="EnFirmaRL">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th>Registro</th>
                          <th class="text-center" colspan="2">Rechazo (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Reenvio (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Aceptado (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Liberacion (2)   /   Dias</th>
                          <th class="text-center" colspan="2">En Firma RL (7)   /   Dias</th>
                          {{-- <th colspan="2">Firma Cliente (30)   /   Dias</th> --}}
                          <th class="text-center">acciones</th>
                          
                          
                        </thead>
                        @foreach($enfirmarl as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_rechazo <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_validado)) }} </i>
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>



                            <td class="text-center">
                              <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberado)) }} </i>
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>
                                {{-- 
                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                             <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             {{-- 
                              <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-pencil" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-times" title="Rechazar" href="{{URL::action('ContratoController@rechazar',$contrato->id)}}"> </button></a> 
                              &nbsp

                              <a class="fa fa-thumbs-up" title="Aceptar" href="{{URL::action('ContratoController@aceptar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@liberar',$contrato->id)}}"> </button></a>
                              @endif --}}
                              @if(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-edit" title="Firma RL" href="{{URL::action('ContratoController@envia_firma_cl',$contrato->id)}}"> </button></a>
                              @else
                              @endif 
                              &nbsp
                              
                            </td>                                        
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div> 
                  </div>

                  <div class="tab-pane fade" id="FirmadosRL">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th>Registro</th>
                          <th class="text-center" colspan="2">Rechazo (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Reenvio (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Aceptado (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Liberacion (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Firmado RL (7)   /   Dias</th>
                          {{-- <th colspan="2">Firma Cliente (30)   /   Dias</th> --}}
                          <th class="text-center">acciones</th>
                          
                          
                        </thead>
                        @foreach($firmadosrl as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                           <!--  <td class="text-center">
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_rechazo <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td> -->

                            @if ( $contrato->f_rechazo == null )
                               <td>-</td>
                               <td>-</td> 
                            @else
                            <td><i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i></td>

                            <td>
                              @if ($contrato->dias_rechazo <= 2)
                                  <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>  
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            @endif



                            <td class="text-center">
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_validado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_validado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>



                            <td class="text-center">
                              @if ( $contrato->f_liberacion == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>
                                {{-- 
                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                             <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             {{-- 
                              <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-pencil" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-times" title="Rechazar" href="{{URL::action('ContratoController@rechazar',$contrato->id)}}"> </button></a> 
                              &nbsp

                              <a class="fa fa-thumbs-up" title="Aceptar" href="{{URL::action('ContratoController@aceptar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@liberar',$contrato->id)}}"> </button></a>
                              @endif --}}
                              @if(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-edit" title="Firma RL" href="{{URL::action('ContratoController@envia_firma_rl',$contrato->id)}}"> </button></a>
                              @else
                              @endif 
                              &nbsp
                              
                            </td>                                        
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div> 
                  </div>

                  <div class="tab-pane fade" id="EnFirmaCliente">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th>Registro</th>
                          <th class="text-center" colspan="2">Rechazo (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Reenvio (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Aceptado (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Liberacion (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Firma RL (7)   /   Dias</th>
                          {{-- <th colspan="2">Firma Cliente (30)   /   Dias</th> --}}
                          <th class="text-center">acciones</th>
                          
                          
                        </thead>
                        @foreach($enfirmacl as $contrato)
                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            <!-- <td class="text-center">
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_rechazo <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td> -->

                            @if ( $contrato->f_rechazo == null )
                               <td>-</td>
                               <td>-</td> 
                            @else
                            <td><i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i></td>

                            <td>
                              @if ($contrato->dias_rechazo <= 2)
                                  <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>  
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            @endif

                            <!-- <td class="text-center">
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td> -->

                            @if ( $contrato->f_reenvio == null )
                               <td>-</td>
                               <td>-</td> 
                            @else
                            <td><i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i></td>

                            <td>
                              @if ($contrato->dias_reenvio <= 1)
                                  <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>  
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            @endif

                            <td class="text-center">
                              @if ( $contrato->f_validado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_validado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>



                            <td class="text-center">
                              @if ( $contrato->f_liberado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>
                                {{-- 
                            <td>
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td>
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td> --}}
                          
                            
                             <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             {{-- 
                              <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-pencil" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-times" title="Rechazar" href="{{URL::action('ContratoController@rechazar',$contrato->id)}}"> </button></a> 
                              &nbsp

                              <a class="fa fa-thumbs-up" title="Aceptar" href="{{URL::action('ContratoController@aceptar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@liberar',$contrato->id)}}"> </button></a>
                              @endif --}}
                              @if(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-graduation-cap" title="Firma CL" href="{{URL::action('ContratoController@firma_cliente',$contrato->id)}}"> </button></a>
                              @else
                              @endif 
                              &nbsp
                              
                            </td>                                        
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div> 
                  </div>

                  <div class="tab-pane fade" id="FirmadosCliente">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th>Razón Social</th>
                          <th>Empresa</th>
                          <th class="text-center">Registro</th>
                          <th class="text-center" colspan="2">Rechazo (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Reenvio (1)   /   Dias</th>
                          <th class="text-center" colspan="2">Aceptado (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Liberacion (2)   /   Dias</th>
                          <th class="text-center" colspan="2">Firma RL (7)   /   Dias</th>
                          <th class="text-center" colspan="2">Firma Cliente (30)   /   Dias</th>
                          <th>acciones</th>
                          
                          
                        </thead>
                        @foreach($firmadoscl as $contrato)

                                  
                          <tr>
                            
                            <td>{{ $contrato->cliente->razon_social }}</td>
                            <td>{{ $contrato->empresa->razon_social  }}</td>
                            <td class="text-center">
                              @if ( $contrato->f_registro == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_registro)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_rechazo == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_rechazo)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_rechazo <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_rechazo }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_rechazo }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_reenvio == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_reenvio)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_reenvio <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_reenvio }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_reenvio }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_validado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->validado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_aceptado <= 1)
                                <span  class=" badge btn-success">{{ $contrato->dias_aceptado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_aceptado }}</p>
                              @endif  
                            </td>



                            <td class="text-center">
                              @if ( $contrato->f_liberado == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_liberado)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_liberado <= 2)
                                <span  class=" badge btn-success">{{ $contrato->dias_liberado }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_liberado }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_firma_rl == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_rl)) }} </i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_firma_rl <= 7)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_rl }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_rl }}</p>
                              @endif  
                            </td>

                            <td class="text-center">
                              @if ( $contrato->f_firma_cliente == null )
                              <p>N/A</p>

                              @else <i class="badge badge-info"> {{ date('d-m-Y',strtotime($contrato->f_firma_cliente)) }}</i>
                              @endif
                            </td>

                            <td class="text-center">
                              @if ($contrato->dias_firma_cliente <= 30)
                                <span  class=" badge btn-success">{{ $contrato->dias_firma_cliente }}</span>
                              @else<p class="badge btn-danger">{{ $contrato->dias_firma_cliente }}</p>
                              @endif  
                            </td>
                          
                            
                             <td style="text-align: center">
                              <a class="fa fa-search" title="Detalles" href="{{URL::action('ContratoController@show',$contrato->id)}}"> </button></a>
                              &nbsp
                             {{-- 
                              <a class="fa fa-pencil" title="Editar" href="{{URL::action('ContratoController@edit',$contrato->id)}}"> </button></a>
                              &nbsp
                              @if(auth()->user()->tipo=='comercial')
                              <a class="fa fa-pencil" title="Eliminar" href="{{URL::action('ContratoController@destroy',$contrato->id)}}"> </button></a>
                              &nbsp
                              
                              <a class="fa fa-envelope" title="Reenviar" href="{{URL::action('ContratoController@reenviar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='juridico')  
                              <a class="fa fa-times" title="Rechazar" href="{{URL::action('ContratoController@rechazar',$contrato->id)}}"> </button></a> 
                              &nbsp

                              <a class="fa fa-thumbs-up" title="Aceptar" href="{{URL::action('ContratoController@aceptar',$contrato->id)}}"> </button></a>
                              &nbsp
                              @elseif(auth()->user()->tipo=='planeacion')
                              <a class="fa fa-check" title="Liberar" href="{{URL::action('ContratoController@liberar',$contrato->id)}}"> </button></a>
                              @endif --}}
                              {{-- @if (auth()->user()->tipo=='comercial')
                             <td style="text-align: center">
                              <a class="fa fa-envira" title="Firma Cliente" href="{{URL::action('ContratoController@firma_cliente',$contrato->id)}}"> </button></a>
                              @else
                              <p></p>
                              @endif
                            </td>     --}}                                   
                            
                          </tr>
                    
                        @endforeach                 
                      </table>
                    </div> 
                  </div>
                  
                                    
        </div>
</div>
               
@endsection