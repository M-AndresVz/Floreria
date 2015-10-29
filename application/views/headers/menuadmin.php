<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Florería-XALAPA</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">     
        
          <?php $activa = $this->uri->segment(2); ?>
         
            <ul class="nav navbar-nav">

              <li <?php if($activa == '') {
              	echo "class='active'";
              	}?>>

              	<a href="<?=base_url()?>main/principaladmin">
                  <span class="glyphicon glyphicon-home"></span>&nbsp;Inicio
              	</a>
              </li>

        
              </li>
              <li <?php if ($activa == 'agregarFlores'){ echo "class='active'"; } ?>>
                <a href="<?=base_url()?>index.php/main/agregarFlores">
                  <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar catálogo
                </a>
              </li>

              </li>          
              <li <?php if ($activa == 'verFlores'){ echo "class='active'"; } ?>>
                <a href="<?=base_url()?>index.php/main/verFlores">
                  <span class="glyphicon glyphicon-cog"> </span> &nbsp;Mostrar catálogo 
                </a>
              </li>

              <li <?php if($activa == 'ver usuarios'){
                echo "class='active'";
                  }?>>
                  <a href="<?=base_url()?>main/verusuarios">
                    <span class="glyphicon glyphicon-list"></span>&nbsp;Ver Usuarios
                  </a>
              </li>

              </li>
                <li <?php if ($activa == 'agregaremple'){ echo "class='active'"; } ?>>
                  <a href="<?=base_url()?>index.php/main/agregar_empleado">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Empleados
                  </a>
                </li>
               
            

              </li>          
                <li <?php if ($activa == 'verEmpleados'){ echo "class='active'"; } ?>>
                <a href="<?=base_url()?>index.php/main/verEmpleados">
                    <span class="glyphicon glyphicon-user"> </span> &nbsp;Mostrar Empleados
                </a>
                </li>

              <li <?php if ($activa == 'buscar_empleado'){ echo "class='active'"; } ?>>
                <a href="<?=base_url()?>index.php/main/buscar_empleado">
                    <span class="glyphicon glyphicon-search"></span>&nbsp;Buscar Empleado
                </a>
              </li>

              <li>
                <a href="<?=base_url()?>index.php/auth/logout">
                  <span class="glyphicon glyphicon-off"></span>&nbsp;
                  Salir
                </a>
              </li>

              </li>
                <li <?php if ($activa == 'agregarProveedor'){ echo "class='active'"; } ?>>
                  <a href="<?=base_url()?>index.php/main/agregarProveedor">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Proveedores
                  </a>
                </li>

                 </li>
                <li <?php if ($activa == 'verProveedores'){ echo "class='active'"; } ?>>
                  <a href="<?=base_url()?>index.php/main/verProveedores">
                    <span class="glyphicon glyphicon-th-list"></span>&nbsp;Mostrar Proveedores
                  </a>
                </li>

              <li <?php if ($activa == 'index'){ echo "class='active'"; } ?>>
                <a href="<?=base_url()?>index.php/reporte2/index">
                  <span class="glyphicon glyphicon-list-alt"> </span> &nbsp;Generar Reporte 
                </a>
              </li>

            </ul>
            
        </div>
      </div>
</nav>

