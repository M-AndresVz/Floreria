<!-- Navbar -->
	<?=$this->load->view('headers/menuadmin');?> <br><br>
<!-- End Navbar -->

<div class="container">
	<div class="col-md-8">
		<h3>Ver todos los usuarios</h3>
	</div>
</div>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre de usuario</th>
						<th>Correo</th>
						<th>Acciones</th>
					
					</tr>	
				</thead>
				<tbody>	
				<?php
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
								echo "<td>".$row->username."</td>";
								echo "<td>".$row->email."</td>";
																
								echo "<td><a href=".base_url()."main/eliminarusuario/".$row->id." class='label label-danger'> <span class='glyphicon glyphicon-minus'></a></span></td>";
								
								echo "</tr>";
						}	
					}	else {
							echo "No hay enlaces";
					}			
				?>
				</tbody>
			</table>	
		</div>
	</div>	