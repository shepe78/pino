<div class="card card-default" id="card_contacts">
    <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
        <ul class="list-group pull-down" id="contact-list">

            <style>
                .nombre{
                    color:#C34608;
                }
            </style>   
           
            <li class="list-group-item">
                <div class="row">
                    <div class="col-1">
                        <span class="fa fa-2x fa-user"></span>
                    </div>
                    <div class="col-11 text-center text-sm-left">
                        
                        <label class="name lead nombre">{{ $cliente->analista->nombre }}</label>
                        <br> 
                        <span class="fa fa-map-marker fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info">Analista de proyectos</span>
                        <br>
                        <span class="fa fa-phone fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info small">{{ $cliente->analista->telefono }}</span>
                        <br>
                        <span class="fa fa-envelope fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info small text-truncate">{{ $cliente->analista->email}}</span>
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="row">
                    <div class="col-1">
                        <span class="fa fa-2x fa-user"></span>
                    </div>
                    <div class="col-11 text-center text-sm-left">
                        
                        <label class="name lead nombre">{{ $cliente->Asesor->nombre }}</label>
                        <br> 
                        <span class="fa fa-map-marker fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info">Asesor de servicio</span>
                        <br>
                        <span class="fa fa-phone fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info small">{{ $cliente->Asesor->telefono }}</span>
                        <br>
                        <span class="fa fa-envelope fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info small text-truncate">{{ $cliente->Asesor->email}}</span>
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="row">
                    <div class="col-1">
                        <span class="fa fa-2x fa-user"></span>
                    </div>
                    <div class="col-11 text-center text-sm-left">
                        
                        <label class="name lead nombre">{{ $cliente->promotor->nombre }}</label>
                        <br> 
                        <span class="fa fa-map-marker fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info">Promotor comercial</span>
                        <br>
                        <span class="fa fa-phone fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info small">{{ $cliente->promotor->telefono }}</span>
                        <br>
                        <span class="fa fa-envelope fa-fw text-info" data-toggle="tooltip"></span>
                        <span class="text-info small text-truncate">{{ $cliente->promotor->email}}</span>
                    </div>
                </div>
            </li>



          
        </ul>
        <!--/contacts list-->
    </div>
</div>