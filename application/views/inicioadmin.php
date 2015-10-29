	<div class="container" >
		<div class="row">
			<div class="col-md-8">
				<h3>Iniciar sesion</h3> <br><br>
			
				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>main/verificardatos" method="POST">
		
  					<div class="form-group">
			    		<label for="inputEmail3" class="col-sm-2 control-label">Usuario: </label>
			    		<div class="col-sm-5">
      						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
    					</div>
			  		</div>
			  		
			  		<div class="form-group">
			    		<label for="inputEmail3" class="col-sm-2 control-label">Contraseña: </label>
			    		<div class="col-sm-5">
      						<input type="password" class="form-control" id="contra" name="contra" placeholder="Ingresa tu contraseña">
    					</div>
			  		</div>
  					
			  		<div class="form-group">
			    		<div class="col-sm-offset-5 col-sm-2">
			      			<button type="submit" class="btn btn-primary" id="ingresar" name="ingresar">Ingresar</button>
			    		</div>
			  		</div>
			  		
				</form>
			</div>		
		</div>
	</div>
