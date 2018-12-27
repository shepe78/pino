<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM-proyectos') }}</title>

  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
   
    {{-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css"> --}}

    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    


    

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel bg-primary">
            <div class="container-fluid">
                <a style="color:white" class="navbar-brand" href="{{ url('/') }}">
                    <h2>CRM-proyectos</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (auth()->check())
                    <ul class="navbar-nav mr-auto">
                        @if(auth()->user()->tipo=='administrador')
                                               
                            <li class="nav-item dropdown">
                                    <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Proyectos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item fa fa-users" href="{{ route('clientes.index') }}"> &nbsp Clientes</a>
                                      <a class="dropdown-item fa fa-calendar" href="{{ route('contratos.index') }}"> &nbsp Contratos</a>
                                      <a class="dropdown-item fa fa-cogs" href="{{  route('colaboradores.index') }}"> &nbsp Colaboradores</a>
                                      <a class="dropdown-item fa fa-industry" href="{{ route('empresas.index') }}"> &nbsp Empresas</a>
                                      <a class="dropdown-item fa fa-black-tie" href="{{ route('contactos.index') }}"> &nbsp Contactos</a>
                                      <a class="dropdown-item fa fa-download" href="{{  route('empleados.index') }}"> &nbsp Empleados</a>
                                     
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item fa fa-certificate" href="{{ route('giros.index') }}"> &nbsp Giros</a>
                                      <a class="dropdown-item fa fa-book" href="{{ route('grupos.index') }}"> &nbsp Grupos</a>
                                      <a class="dropdown-item fa fa-globe" href="{{ route('plazas.index') }}"> &nbsp Plazas</a>
                                      <a class="dropdown-item fa fa-map-signs" href="{{  route('ciudades.index') }}"> &nbsp Ciudades</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item fa fa-gear" href="{{ route('esquemas.index')}}"> &nbsp Esquemas</a>
                                      {{-- <a class="dropdown-item fa fa-tint" href="{{  route('facturas.index') }}"> &nbsp &nbsp Facturas</a> --}}
                                      <a class="dropdown-item fa fa-commenting-o" href="{{  route('seguimientos.index') }}"> &nbsp Seguimientos</a>
                                      <a class="dropdown-item fa fa-file-pdf-o" href="{{ route('informes.index') }}"> &nbsp Informes</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item fa fa-download" href="{{  route('expedientes.index') }}"> &nbsp Expedientes</a>
                                      <a class="dropdown-item fa fa-download" href="{{ route('reportes.index') }}"> &nbsp Reporte</a>
                                    </div>
                            </li>
                        @else
                        <p></p> 
                        @endif   
                        @if(auth()->user()->tipo=='comercial')    

                            <li class="nav-item dropdown">
                                    <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Comercial
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item fa fa-users" href="{{ route('clientes.index') }}"> &nbsp Clientes</a>
                                      <a class="dropdown-item fa fa-calendar" href="{{ route('contratos.index') }}"> &nbsp Contratos</a>
                                      <a class="dropdown-item fa fa-cogs" href="{{  route('colaboradores.index') }}"> &nbsp Colaboradores</a>
                                      <a class="dropdown-item fa fa-industry" href="{{ route('empresas.index') }}"> &nbsp Empresas</a>
                                      <a class="dropdown-item fa fa-black-tie" href="{{ route('contactos.index') }}"> &nbsp Contactos</a>
                                      <a class="dropdown-item fa fa-download" href="{{  route('empleados.index') }}"> &nbsp Empleados</a>
                                      
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item fa fa-certificate" href="{{ route('giros.index') }}"> &nbsp Giros</a>
                                      <a class="dropdown-item fa fa-book" href="{{ route('grupos.index') }}"> &nbsp Grupos</a>
                                      <a class="dropdown-item fa fa-globe" href="{{ route('plazas.index') }}"> &nbsp Plazas</a>
                                      <a class="dropdown-item fa fa-map-signs" href="{{  route('ciudades.index') }}"> &nbsp Ciudades</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item fa fa-gear" href="{{ route('esquemas.index')}}"> &nbsp Esquemas</a>
                                      {{-- <a class="dropdown-item fa fa-tint" href="{{  route('facturas.index') }}"> &nbsp &nbsp Facturas</a> --}}
                                      <a class="dropdown-item fa fa-commenting-o" href="{{  route('seguimientos.index') }}"> &nbsp Seguimientos</a>
                                      {{-- <a class="dropdown-item fa fa-file-pdf-o" href="{{ route('informes.index') }}"> &nbsp Informes</a> --}}
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item fa fa-download" href="{{  route('expedientes.index') }}"> &nbsp Expedientes</a>
                                    </div>

                            </li>
                            @else
                            <p></p>
                            @endif
                  
                            @if(auth()->user()->tipo=='juridico') 
                            <li class="nav-item dropdown">
                                    <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Juridico Contratos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item fa fa-users" href="{{  route('clientes.index') }}"> &nbsp Clientes</a>
                                      <a class="dropdown-item fa fa-calendar" href="{{  route('contratos.index') }}"> &nbsp Contratos</a>
                                      <a class="dropdown-item fa fa-download" href="{{  route('empleados.index') }}"> &nbsp Empleados</a>
                                                                          
                                    </div>

                            </li>
                            @else
                            <p></p>
                            @endif

                             @if(auth()->user()->tipo=='planeacion') 
                            <li class="nav-item dropdown">
                                    <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Planeacion Fiscal
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item fa fa-users" href="{{  route('clientes.index') }}"> &nbsp Clientes</a>
                                      <a class="dropdown-item fa fa-calendar" href="{{  route('contratos.index') }}"> &nbsp Contratos</a>
                                      
                                                                          
                                    </div>

                            </li>
                            @else
                            <p></p>
                            @endif                             

                    </ul>
                    @endif
                        
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" style="color:white" href="{{ route('login') }}">Login</a></li>
                            {{-- <li><a class="nav-link" style="color:white" href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li class="nav-item dropdown">
                                <a style="color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          @if(session('message')) 
           <div class="alert alert-{{ session('message')[0] }}">
           {{ session('message')[1] }}
          </div>
          @endif
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    {{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</body>
</html>