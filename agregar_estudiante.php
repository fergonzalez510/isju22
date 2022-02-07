<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('barra_lateral_tablero.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Agregar Estudiante</div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click para volver" href="estudiantes.php"><i class="icon-arrow-left icon-large"></i> Volver</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
                         <div class="block-content collapse in">						
						<form id="agregar_estudiante" class="form-signin" method="post">
						<!-- span 4 -->
						<!-- lado izquierdo (mirando de frente) del formulario de registro alumno -->	
									<div class="span4">
												
											<label>Nombres:</label>
											<input type="text" class="input-block-level"  name="nombres"   placeholder="Nombres" required>
											
											<label>Apellido:</label>
											<input type="text" class="input-block-level"  name="apellido"  placeholder="Apellido" required>
											
											<label>Genero:</label>
												<select name="genero" class="span5" required>
													<option></option>
													<option>Masculino</option>
													<option>femenino</option>
													<option>Sin Especificar</option>
												</select>								
									</div>
						<!-- span 4 -->				
						<!-- lado medio del formulario de registro alumno -->				
						<div class="span4">
										</select>
											<label>Email:</label>
											<input type="text" class="input-block-level"  name="email"  placeholder="Email" required>
											
											<label>Telefono:</label>
											<input type="text" class="input-block-level"  name="telefono"   placeholder="Telefono" required>
											
											<label>Fecha de Nacimiento:</label>
											<input type="date" class="input-block-level"  name="fec_nac" placeholder="domicilio" required>
											
											<label>Direccion:</label>
											<input type="text" Placeholder="Direccion" name="direccion" class="my_message" required>

										</select>	
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<!-- lado derecho (mirando de frente) del formulario de registro alumno -->	
							<div class="span4">
											
							                <label>Localidad:</label>
											<input type="text" class="input-block-level"  name="localidad"   placeholder="Localidad" required>							
										    
											<label>Carrera:</label>
											<select name="carrera" class="span5" required>
											<option></option>
											<option>diseño</option>
											<option>software</option>
											
											<?php 
												$result = mysqli_query($connection,"select * from carrera ")or die(mysql_error());
												while($row = mysqli_fetch_array($result)){
												$myclass = $row['carrera_nombre'];			
											?>
												
												<option value="<?php echo $myclass;?>"></option>
												
									<?php }?>
								</select>
									<br>
									<br>
									<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Guardar </button>	
						</div>
						<!--end span 4 -->
						</form>						
			<script>
			jQuery(document).ready(function($){
				$("#agregar_estudiante").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "guardar_estudiante.php",
						data: formData,
						success: function(html){
							$.jGrowl("Estudiante agregado exitosamente", { header: 'Estudiante Agregado' });
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