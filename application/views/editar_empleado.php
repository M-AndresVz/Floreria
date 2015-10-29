<!-- Navbar -->
<?=$this->load->view('headers/menuadmin');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>

	<div class="container">
		<div class="col-md-8">
			<h2>Editar Empleados</h2>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<form id="form" name="form" action="<?=base_url()?>index.php/bookmarks/editarEnlace/<?=$id?>" method="POST">

			<label for="titulo">Nombre Completo</label>
			<input type="text" size="20" name="nombrecompleto" id="nombrecompleto" value="<?=$nombrecompleto?>" />
			<br />
			<label for="url">Usuario    </label>
			<input type="text" size="40" name="usuario" id="usuario" value="<?=$usuario?>" />
			<br />
			<label for="url">Password</label>
			<input type="text" size="40" name="password" id="password" value="<?=$password?>" />
			<br />
			<label for="url">Diección</label>
			<input type="text" size="40" name="direccion" id="direccion" value="<?=$direccion?>" />
			<br />
			<label for="url">Teléfono</label>
			<input type="text" size="40" name="telefono" id="telefono" value="<?=$telefono?>" />
			<br />
			<label for="url">Sueldo</label>
			<input type="text" size="40" name="sueldo" id="sueldo" value="<?=$sueldo?>" />
			<br />
			<label for="url">Tipo de empleado</label>
			<input type="text" size="40" name="tipo_empleado" id="tipo_empleado" value="<?=$tipo_empleado?>" />

			<br>
			<br>

			<p><input type="submit" class="btn btn-success" name="editar" id="editar" value="Editar Datos Empleado" /></p>
	        </form>	
		</div>
	</div>	
</div>