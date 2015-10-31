<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
	<div class="navbar-hader">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar" aria-expanded="false"
		aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icoc-bar"></span>
		<span class="icoc-bar"></span>
		<span class="icoc-bar"></span>
		</button>
		<a class "navbar-brand" href="#">Florería-XALAPA</a>
		</div>

		<div id="navbar" class="collapse navbar-collapse">

		<?php $activa =$this->uri->segment(2);?>

		<ul class="nav navbar-nav">

			<li <?php if($activa==''){
			echo "class='active'";
			}?>>
				
			<a href="<?=base_url()?>main/principalempleados_view"></a>
			<span class="glyphicon glyphicon-home"></span>&nbsp;Inicio
			</a>
			</li>
			
			 </li>          
              <li <?php if ($activa == 'verFlores'){ echo "class='active'"; } ?>>
                <a href="<?=base_url()?>index.php/main/verFlores">
                  <span class="glyphicon glyphicon-film"> </span> &nbsp;Mostrar catálogo 
                </a>
              </li>

             <li>
                <a href="<?=base_url()?>index.php/auth/logout">
                  <span class="glyphicon glyphicon-off"></span>&nbsp;Salir
                </a>
              </li>

		</ul>