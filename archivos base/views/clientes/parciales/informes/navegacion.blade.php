<ul class="nav nav-tabs">
    @if(!$ingeniae->isEmpty())
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#Ingenia">Ingenia</a>
    </li>                 
    @else
    
    @endif

    @if(!$aljeze->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Aljez">Aljez</a>
    </li>
    @else
    
    @endif
    @if(!$avee->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Ave">Ave</a>
    </li>
    @else                  
    
    @endif
    @if(!$busnese->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Busnes">Busnes</a>
    </li>
    @else
    
    @endif
    @if(!$enterprisee->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Enterprise">Enterprise</a>
    </li>
    @else
    
    @endif
    @if(!$daikone->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Daikon">Daikon</a>
    </li>
    @else
    
    @endif
    @if(!$dyce->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#DYC">DYC</a>
    </li>
    @else
    
    @endif
    @if(!$centroe->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Centro">Centro</a>
    </li>
    @else
    
    @endif
    @if(!$s4ue->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#S4U">S4U</a>
    </li>
    @else
    
    @endif
    @if(!$lve->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#LV">L&V</a>
    </li>
    @else                                   
    
    @endif
    @if(!$aportacionese->isEmpty())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Aportaciones">Aportaciones</a>
    </li>
    @else
    
    @endif
</ul>