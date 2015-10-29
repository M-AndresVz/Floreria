<!-- Navbar -->
<?=$this->load->view('headers/menuadmin');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>

	<div class="container">
		<div class="col-md-8">
			<h2>Editar Proveedores</h2>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<form id="form" name="form" action="<?=base_url()?>index.php/funcionalProveedor/editarEnlace/<?=$id?>" method="POST">
            <br>
        <fieldset>
            	<legend>Editar datos del proveedor</legend>
			<label for="titulo">Nombre completo </label>
			<input type="text" name="nombrecompleto" id="nombrecompleto" value="<?=$nombrecompleto?>" class="input" readonly/>
			<br />
			<br>
			<label for="url">Dirección</label>
			<input type="text" size="40" name="direccion" id="direccion" value="<?=$direccion?>" />
			<br />
			<br>
			<label for="url">Teléfono</label>
			<input type="text" size="40" name="telefono" id="telefono" value="<?=$telefono?>" />
			<br />
			<br>
			<label for="url">Móvil</label>
			<input type="text" size="40" name="movil" id="movil" value="<?=$movil?>" />
			<br />
			<br>
			<label for="url">Correo</label>
			<input type="text" size="40" name="correo" id="correo" value="<?=$correo?>" />
			<br />
			<br>
			<br>
			<p><input type="submit" class="btn btn-success" name="editar" id="editar" value="Editar Datos Proveedor" /></p>
			<!--<button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button> -->
	        </form>	
		</div>
	</div>	
</div>
