<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
<?php $get_id = $_GET['id']; ?>
   
<body>
		<?php include('navbar.php');?>
		 <center><img src="images/logoISJU.png"></center>
			<div class="container-fluid">
				<div class="row-fluid">
					<?php include('barra_lateral_estudiantes.php'); ?>
					<div class="span9" id="">
						<div class="row-fluid">

							<!-- block -->
							<div  id="block_bg" class="block">
                            	<div class="navbar navbar-inner block-header">
                                	<div class="muted pull-left"><i class="icon-pencil icon-large"></i> Editar Estudiante</div>
                                	<div class="muted pull-right"><a href="estudiantes.php"><i class="icon-arrow-left icon-large"></i> Volver</a></div>
                           		 </div>

                            <div class="block-content collapse in">
								<?php
									$query = mysqli_query($connection,"select * from estudiantes where estudiante_id = '$get_id'");
									$row = mysqli_fetch_array($query);
								?>
								<form id="editar_estudiante" class="form-signin" method="post">
								<!-- span 4 -->
									<div class="span4">
											<input type="hidden" value="<?php echo $row['estudiante_id']; ?>" class="input-block-level"  name="estudiante_id" required>
										
											<label>Nombres:</label>
												<input type="text" class="input-block-level"  name="nombres" value="<?php echo $row['nombres']; ?>" required>
											
											<label>Apellido:</label>
												<input type="text" class="input-block-level"  name="apellido" value="<?php echo $row['apellido']; ?>"required>
											
												<label>Genero:</label>
												<select name="genero_id" class="span5" required>
													<option></option>
													<option>Maculino</option>
													<option>Femenino</option>
													<option>Sin Especificar</option>
													<?php 
														$result1 = mysqli_query($connection,"select * from genero");
															while($row1 = mysqli_fetch_array($result1)){
															$myclass1 = $row1['genero_id'];			
													?>

													<?php }?>
												</select>

											<label>email:</label>
												<input type="email" class="input-block-level"  name="email" value="<?php echo $row['email']; ?>"required>	
									</div>		
									<div class="span4">
											
											<label>Telefono:</label>
												<input type="text" class="input-block-level"  name="telefono" value="<?php echo $row['telefono']; ?>">

											<label>Fecha de Nacimiento:</label>
												<input type="date" class="input-block-level"  name="fec_nac" value="<?php echo $row['fec_nac']; ?>">
										
											<label>Direccion:</label>
												<input type="text" value="<?php echo $row['direccion']; ?>" name="direccion" class="my_message" required>

									
									<br>
									<br>
							<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Actualizar</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
								<div class="span4">
											<input type="hidden" value="<?php echo $row['estudiante_id']; ?>" class="input-block-level"  name="estudiante_id" required>
										
											<label>Localidad:</label>
												<input type="text" class="input-block-level"  name="localidad" value="<?php echo $row['localidad']; ?>" required>
											
												<label>Carrera:</label>
												<select name="carrera_id" class="span5" required>
													<option></option>
													<option>Tec. Sup. en Desarrollo de Software</option>
													<option>Tec. Sup. en Desarrollo de Dise??o Grafico</option>
													
													<?php 
														$result = mysqli_query($connection,"select * from carrera");
															while($row = mysqli_fetch_array($result)){
															$myclass = $row['carrera_id'];			
													?>	
													<?php }?>
												</select>
												
								</div>
						</div>
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#editar_estudiante").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "actualizar_estudiante.php",
												data: formData,
												success: function(html){
													$.jGrowl("Estudiante actualizado con ??xito", { header: 'Estudiante Actualizado' });
													window.location = 'estudiantes.php';
												}
											});
										});
									});
								</script>
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