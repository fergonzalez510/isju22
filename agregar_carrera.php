<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
		        <center><img src="images/logoISJU.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('barra_lateral_agregar_carrera.php'); ?>
				<div class="span3" id="">
				<?php  include('agregar_carrera1.php');  ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 
							$query = mysqli_query($connection,"select * from carrera")or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de Cursos</div>
                                <div class="muted pull-right">
									Numero de Cursos: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_class1.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Eliminar</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#delete').tooltip('show');
															$('#delete').tooltip('hide');
														});
														</script>
									<?php include('modal_borrar.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Curso</th>
												<th>Categoria</th>
												<th>Cuota</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query1 = mysqli_query($connection,"select * from carrera")or die(mysql_error());
													while($row = mysqli_fetch_array($user_query1)){
													$id = $row['class_id'];
													?>
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['carrera_nombre']; ?> </td>
												<td><?php echo $row['curso']; ?></td>
												<td><?php echo $row['carrera_costo']; ?></td>
												<td width="80">
												<a data-placement="left" id="edit<?php echo $id; ?>" title="Click para Editar" href="edit_class1.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i> Editar</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#edit<?php echo $id; ?>').tooltip('show');
															$('#edit<?php echo $id; ?>').tooltip('hide');
														});
														</script>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>