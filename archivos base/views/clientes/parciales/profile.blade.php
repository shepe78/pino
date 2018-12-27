
   
        <ul class="list-group pull-down" id="contact-list">
           
            <li class="list-group-item">
                <div class="row">
                    
                    <div class="col-md-12 text-center text-sm-left">

                        <style>
                                .profile{
                                    color:#C34608;
                                }
                        
                        </style>
                        
                        <label class="name lead profile">{{ $cliente->razon_social }}</label>
                        <br> 
                        <span class="fa fa-superpowers fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info">NC: {{ $cliente->nombre_comercial }}</span>
                        <br>
                        <span class="fa fa-superpowers fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info">RFC: {{ $cliente->rfc }}</span>
                        <br>

                        <span class="fa fa-map-marker fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info">Domicilio: {{ $cliente->domicilio }}</span>
                        <br>
                       
                      
                    </div>
                </div>
            </li>
            
        </ul>



