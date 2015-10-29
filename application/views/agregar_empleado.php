<!-- Navbar -->
	<?=$this->load->view('headers/menuadmin');?>
	<!-- End navbar -->

	<div class="container">
		<div class="row">
			<div class="col-md-8">    
	    	<h3>Agregar Empleados</h3> <br>

				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/guardar" method="POST">

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nombre completo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Ingresa Nombre Completo">
				    </div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa Usuario">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="password" name="password" placeholder="Ingresa Password">
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
			    	<label for="inputEmail3" class="col-sm-2 control-label">Sueldo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="sueldo" name="sueldo" placeholder="Ingresa Sueldo">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Tipo Empleado</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="topo_empleado" name="tipo_empleado" placeholder="Ingresa Tipo Empleado">
				    </div>
				</div>
				    
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>      				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>