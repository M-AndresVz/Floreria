<!-- Navbar -->


<?=$this->load->view('headers/menuadmin');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>

	<div class="container">
		<div class="col-md-8">
			<h2>Editar Flores</h2>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<!--<form id="form" name="form" action="<?=base_url()?>index.php/productos/editarEnlace/<?=$id?>" method="POST">-->
			<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/productos/editarEnlace/<?=$id?>"method="POST">
			<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" size="40" name="nombre" id="nombre" value="<?=$nombre?>" />
				</div>
			</div>

			<div class="form-group">
				<label for="url" class="col-sm-2 control-label">Descripcion</label>
				<div class="col-sm-10">
					<input type="text" size="40" name="descripcion" id="descripcion" value="<?=$descripcion?>" />
				</div>
			</div>

			<div class="form-group">
				<label for="url" class="col-sm-2 control-label">Imagen</label>
				<div class="col-sm-10">
					<input type="text" size="40" name="imagen" id="imagen" value="<?=$imagen?>" />
				</div>
			</div>

			<div class="form-group">
				<label for="url" class="col-sm-2 control-label">Precio</label>
				<div class="col-sm-10">
					<input type="text" size="40" name="precio" id="precio" value="<?=$precio?>" />
				</div>
			</div>

			
			<br />

			<p><input type="submit" class="btn btn-success" name="editar" id="editar" value="Guardar cambios" /></p>

	        </form>	
		</div>
	</div>	
</div>
