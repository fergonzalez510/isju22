	<?php include('dbcon.php'); ?>
	<form action="borrar_estudiante.php" method="post">
		<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 	<a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Lista</a> 
		<a href="agregar_estudiante.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Agregar Estudiante</a>
		</div>
		<a data-toggle="modal" href="#borrar_estudiante" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Eliminar</a>

		<?php include('modal_borrar.php'); ?>
				<thead>
					<tr>
								<th>Nombres</th>
								<th>Apellido</th>
								<th>Genero</th>
								<th>email</th>
								<th>Telefono</th>
								<th>Fecha de Nac.</th>
								<th>Direccion</th>
								<th>Localidad</th>
								<th>Carrera</th>
								<th class="empty"></th>
								<th class="empty"></th>
					</tr>
				</thead>
			
	 		<tbody>
				<?php
					$query = mysqli_query($connection,"select * from estudiantes ")or die(mysqli_error($row));
					while($row = mysqli_fetch_array($query)){
					$id = $row['estudiante_id'];
				?>
				<tr>
					<td><?php echo $row['nombres'];?></td>
					<td><?php echo $row['apellido'];?></td>
					<td><?php echo $row['genero'];?></td> 
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['telefono'];?></td> 
					<td><?php echo $row['fec_nac'];?></td> 
					<td><?php echo $row['direccion'];?></td>   
					<td><?php echo $row['localidad'];?></td> 
					<td><?php echo $row['carrera_id']; ?></td> 
				
					<td class="empty" width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" 	value="<?php echo $id; ?>"></td>
				
					<td class="empty" width="160">
				
					<a data-placement="left" title="Click para Editar" id="edit<?php echo $id; ?>" href="editar_estudiante.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
				
					<script type="text/javascript">
						$(document).ready(function(){
							$('#edit<?php echo $id; ?>').tooltip('show');
							$('#edit<?php echo $id; ?>').tooltip('hide');
						});
					</script>
					<a data-placement="top" title="Click para ver todos los detalles" id="view<?php echo $id; ?>" href="view_stud.php<?php echo '?id='.$id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i></a>
					<script type="text/javascript">
						$(document).ready(function(){
							$('#view<?php echo $id; ?>').tooltip('show');
							$('#view<?php echo $id; ?>').tooltip('hide');
						});
					</script>
				</td>
				</tr>
			<?php } ?>    
	
			</tbody>
		</table>
	</form>