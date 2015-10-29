<?=$this->load->view('headers/menuadmin');?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">    
	    	<h3>Agregar catálogo de flores</h3> <br>

				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/guardarFlores" method="POST">

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la flor">
				    </div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">descripcion</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">imagen</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Nombre de la imagen con extencion, ejemplo: rosa.png">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">precio</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio, ejemplo: 100.50 ó 100">
				    </div>
				</div>

				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-primary" id="guardarFlores" name="guardarFlores">Guardar</button>      				
    				</div>
  				</div>

				</form>
			</div>
    </div>
  </div>