<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
	<div class="col-md-8">
		<h2>Buscar Empleados</h2>
	</div>
</div>

<div id="container">	
	<div class="col-md-12">		

		<?=$this->load->view('headers/menuadmin');?>

		<div class="clearfix">&nbsp;</div>

		<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<form id="form" method="GET" action="<?=base_url()?>index.php/main/buscar_empleado">
							<input type="text" id="query" name="query" />
							<input type="submit" id="buscarPeli" value="Buscar" />
						</form>
						<div class="clearfix">&nbsp;</div>
					</tr>
					<tr>
						<th>Nombre Completo</th>
					<!--	<th>URL</th>-->
						<th>Usuario</th>
						<th>Password</th>
						<!--<th>Usuario</th>-->
						<th>Dirección</th>
						<th>Teléfono</th>
						<th>Sueldo</th>
						<th>Tipo Empleado</th>
						<th>Acciones</th>
						<!--  <th>Ver Pelicula</th> -->
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($result != FALSE){
						foreach ($result->result() as $row){
							echo "<tr>";
								echo "<td>".$row->nombrecompleto."</td>";
							//	echo "<td>".$row->url."</td>";
								echo "<td>".$row->usuario."</td>";
								echo "<td>".$row->password."</td>";
								echo "<td>".$row->direccion."</td>";
								echo "<td>".$row->telefono."</td>";
								echo "<td>".$row->sueldo."</td>";
								echo "<td>".$row->tipo_empleado."</td>";
							
								echo "<td>";
									echo "<a href='".base_url()."index.php/bookmarks/editar/".$row->id."' class='label label-success'>";
									echo "<span class='glyphicon glyphicon-pencil'></a></span>";
									echo "&nbsp;&nbsp;";
									echo "<a href='".base_url()."index.php/bookmarks/eliminar/".$row->id."' class='label label-danger'>";
										echo "<span class='glyphicon glyphicon-minus'></a></span>";
								
						}	
					}				
				?>
				</tbody>
			</table>	


		<p>Total de resultados: <b><?php echo $total; ?></b></p>

	</div>