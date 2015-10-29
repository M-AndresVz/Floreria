<?=$this->load->view('headers/menuadmin');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>
	

	<div class="container">
		<div class="col-md-8">
			<h2>Flores en Catálogo</h2>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Imagen</th>
						<th>Precio</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
								echo "<td>".$row->nombre."</td>";
								echo "<td>".$row->descripcion."</td>";
								echo "<td>".$row->imagen."</td>";
								echo "<td>".$row->precio."</td>";
								echo "<td>";
								
								echo "<a href='".base_url()."index.php/productos/editarFlores/".$row->id."' class='label label-success'>";
									echo "<span class='glyphicon glyphicon-pencil'></a></span>";

									echo "&nbsp;&nbsp;";
									echo "<a href='".base_url()."index.php/productos/eliminarFlores/".$row->id."' class='label label-danger'>";
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
