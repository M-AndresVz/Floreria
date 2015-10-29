	<?=$this->load->view('headers/menuadmin');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>


	<div class="container">
		<div class="col-md-8">
			<h2>Ver todos los Empleados</h2>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					
					
						<th>Nombre completo</th>
						<th>Usuario</th>
						<th>Password</th>
						<th>Dirección</th>
						<th>Teléfono</th>
						<th>Sueldo</th>
						<th>Tipo Empleado</th>
						<th>Acciones</th>
					
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
								echo "<td>".$row->nombrecompleto."</td>";
							   //echo "<td>".$row->url."</td>";
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
								echo "</tr>"; 

								    

						}	
					}				
				?>
				</tbody>
			</table>	
		</div>
	</div>	
</div>
