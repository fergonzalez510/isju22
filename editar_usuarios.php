<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
		 <center><img src="images/titulo.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('baqrra_lateral_usuarios.php'); ?>
				<div class="span3" id="">
				<?php include('edit_user_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                             		<?php 
							$user_query = mysqli_query($connection,"select * from usuarios")or die(mysql_error());
							$count = mysqli_num_rows($user_query);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> User List</div>
                                <div class="muted pull-right">
									Number of Users: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_user.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Eliminar</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#delete').tooltip('show');
															$('#delete').tooltip('hide');
														});
														</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Usuario</th>
												<th>Nombre Completo</th>
												<th>Estado</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query1 = mysqli_query($connection,"select * from usuarios")or die(mysql_error());
													while($row = mysqli_fetch_array($user_query1)){
													$id = $row['usuarioid'];
													?>
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['username']; ?> </td>
												<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
												<td><?php echo $row['status']; ?></td>
												<td width="80">
												<a data-placement="left" id="edit<?php echo $id; ?>" title="Click para Editar" href="editar_usuarios.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i> Editar</a>
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