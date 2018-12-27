
   
        <ul class="list-group pull-down" id="contact-list">
           
            <li class="list-group-item">
                <div class="row">
                    
                    <div class="col-md-12 text-center text-sm-left">

                        <style>
                                .profile{
                                    color:#039BE5;                                    
                                }

                                .colorletra{
                                    color: #0E0B29;
                                }
                        
                        </style>
                        
                        <label class="name lead profile">{{ $cliente->razon_social }}</label>
                        <br> 
                        <span class="fa fa-map-marker fa-fw colorletra" data-toggle="tooltip"></span>
                        <span class="colorletra">NC: {{ $cliente->nombre_comercial }}</span>
                        <br>
                        <span class="fa fa-map-marker fa-fw colorletra" data-toggle="tooltip"></span>
                        <span class="colorletra">RFC: {{ $cliente->rfc }}</span>
                        <br>

                        <span class="fa fa-map-marker fa-fw colorletra" data-toggle="tooltip"></span>
                        <span class="colorletra">Domicilio: {{ $cliente->domicilio }}</span>
                        <br>
                       
                      
                    </div>
                </div>
            </li>
            
        </ul>



