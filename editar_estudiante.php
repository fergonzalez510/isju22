<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
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
						$query = mysqli_query($connection,"select * from estudiantes where alumno_id = '$get_id'")or die(mysql_error());
						$row = mysqli_fetch_array($query);
						?>
						<form id="update_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
										<input type="hidden" value="<?php echo $row['alumno_id']; ?>" class="input-block-level"  name="alumno_id" required>
										
										<label>Nombres:</label>
											<input type="text" class="input-block-level"  name="nombres" value="<?php echo $row['nombres']; ?>" required>
											<label>Segundo Nombre:</label>
											<input type="text" class="input-block-level"  name="mname"     value="<?php echo $row['middlename']; ?>"     required>
											<label>Apellidos:</label>
											<input type="text" class="input-block-level"  name="lname"  value="<?php echo $row['lastname']; ?>"  required>
											<label>Genero:</label>
												<select name="gender" class="span5" required>
													<option><?php echo $row['gender']; ?></option>
													<option>Masculino</option>
													<option>FeMasculino</option>
												</select>
										</div>		
						<div class="span4">
							<label>Fecha de Nacimiento:</label>
									<input type="date" class="input-block-level"  name="dob" value="<?php echo $row['dob']; ?>">
							<label>Direccion:</label>
									<input type="text" value="<?php echo $row['address']; ?>" name="address" class="my_message" required>
							<label>Curso:</label>		
									<select name="student_class" class="span5" required>
									<option> <?php echo $row['class'];?></option>
										<?php 
											$result = mysqli_query($connection,"select * from class ")or die(mysql_error());
											while($row1 = mysqli_fetch_array($result)){
											$myclass = $row1['class_name'];			
									     ?>
								<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
									<?php }?>
							</select>
							<dt><label>Transporte:</label></dt>
											<dd><label class="radio-inline"><input type="radio" name="transport" value="si" checked='true'> Si </label></dd>
											<dd><label class="radio-inline"><input type="radio" name="transport" value="no"> No</label></dd>
										
									<label>Ruta:</label>
											<input type="text" value="<?php echo $row['route']; ?>"" name="route" class="my_message">
									
									<br>
									<br>
							<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Actualizar</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
							<label>Primer Nombre Apoderado:</label>
							<input type="text" class="input-block-level"  name="gfname" value="<?php echo $row['gfirstname']; ?>" required>
							<label>Segundo Nombre Apoderado:</label>
							<input type="text" class="input-block-level"  name="gmname" value="<?php echo $row['gmiddlename']; ?>" required>
							<label>Apellidos Apoderado:</label>
							<input type="text" class="input-block-level"  name="glname" value="<?php echo $row['glastname']; ?>" required>
							<label>Parentezco:</label>
							<input type="text" class="input-block-level"  name="rship" value="<?php echo $row['rship']; ?>" required>
							<label>Telefono:</label>
							<input type="text" class="input-block-level"  name="tel" value="<?php echo $row['tel']; ?>" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="10" required>
						</div>
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#update_student").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_student.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Student Updated' });
													window.location = 'students.php';
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