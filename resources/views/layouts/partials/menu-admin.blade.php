 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">CONFIGURACION</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box-open text-info"></i>
              <p>
                Catalogos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sucursales.index') }}" class="nav-link" ">
                  <i class="nav-icon fas fa-globe-americas text-info"></i>
                  <p>Sucursales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('choferes.index') }}" " class="nav-link">
                  <i class="nav-icon fas fa-map-signs text-info"></i>
                  <p>Choferes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('productos.index') }}" " class="nav-link">
                  <i class="nav-icon fas fa-map-signs text-info"></i>
                  <p>Productos</p>
                </a>
              </li>
              
            </ul>
          </li>
                              
          <li class="nav-header">REGISTROS</li>
          <li class="nav-item">
            <a href="#{{-- {{ route('papeletas.index') }} --}}" class="nav-link">
              <i class="nav-icon fa fa-calendar-alt text-info"></i>
              <p>
                Papeletas               
              </p>
            </a>
          </li>
                   
          
        </ul>
      </nav>