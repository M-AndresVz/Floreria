<!--En esta vista se muestra el menu cuando solo ves otras galerias y no estas registrado -->
<style>
  div{
    background-color: pink;
  }
</style>

<nav class="navbar  navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Floreria-XALAPA</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">     
        
        <?php $activa = $this->uri->segment(2); ?>
       
          <ul class="nav nav-pills">

 
            <li <?php if($activa == '') {
            		echo "class='active'";
            	}    ?>   >
            	<a href="<?=base_url()?>">
					<span role="presentation"></span>&nbsp;Iniciar sesion
            	</a>
            </li>   
       
 		
			<li <?php if($activa == 'inventarioInvitado') {
            		echo "class='active'";
            	}    ?>   >
				<a href="<?=base_url()?>main/inventarioInvitado">
					<span role="presentation"> </span> &nbsp;Mostrar inventario	
				</a>  
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>