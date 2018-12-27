<div class="card card-default" id="card_contacts">
    <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
        <style>
                .nombre{
                    color:#039BE5;

                }
                .letra{
                    color: #0E0B29;
                }
            </style>
        <ul class="list-group pull-down" id="contact-list">
            @foreach($contactos as $item)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-1">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="col-11 text-center text-sm-left">
                        
                        <label class="name lead nombre">{{ $item->nombre }}</label>
                        <br> 
                        <span class="fa fa-map-marker fa-fw letra"  data-toggle="tooltip"></span>
                        <span class="letra">{{ $item->puesto }}</span>
                        <br>
                        <span class="fa fa-phone fa-fw letra" data-toggle="tooltip"></span>
                        <span class=" letre small">{{ $item->telefono }}</span>
                        <br>
                        <span class="fa fa-envelope fa-fw letra" data-toggle="tooltip"></span>
                        <span class="letra small text-truncate">{{ $item->email }}</span>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <!--/contacts list-->
    </div>
</div>