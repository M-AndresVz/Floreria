<!-- Navbar -->
	<?=$this->load->view('headers/menuadmin');?>
	<!-- End navbar -->

	<div class="container">
		<div class="row">
			<div class="col-md-8">    
	    	<h3>Agregar Proveedor</h3> <br>

				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/guardarProveedor" method="POST">

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nombre completo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Ingresa Nombre Completo">
				    </div>
			  	</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Dirección</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa Dirección">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Teléfono</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa Teléfono">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Móvil</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="movil" name="movil" placeholder="Ingresa Móvil">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Correo electrónico</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingresa correo electrónico">
				    </div>
				</div>
				    

				    
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-primary" id="guardarProveedor" name="guardarProveedor">Guardar</button>      				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>