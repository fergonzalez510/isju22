<?php include('header.php'); ?>
<?php include('sesion.php'); ?>

  <body id="login">
    <div class="container">
		
	<?php
			$query = mysqli_query($connection,"select * from usuarios where usuarioid = '$session_id'")or die(mysql_error());
			$row = mysqli_fetch_array($query);
	?>		
	
      <form id="cambio_contraseña" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Cambiar la Contraseña</h3>
		<input type="hidden" 	id="contraseña"               name="contraseña" 			  value="<?php echo $row['contraseña']; ?>"  placeholder="Contraseña actual">
		<input type="password"  id="Contraseña_actual"        name="Contraseña_actual"                        			                 placeholder="Contraseña actual" required>
        <input type="password"  id="Nueva_contraseña" 		  name="Nueva_contraseña"                                                    placeholder="Nueva contraseña" required>
		<input type="password"  id="Repetir_nueva_contraseña" name="Repetir_nueva_contraseña"                                            placeholder="Repetir nueva contraseña" required>
		<br>
		<a href="tablero.php" title="Click para Editar"  class="btn btn-inverse">Volver</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
        <button  type="submit" data-placement="right" id="save" name="save" class="btn btn-success"><i class="icon-save icon-large"></i> Guardar</button>
		

			<script>
			jQuery(document).ready(function(){
			jQuery("#cambio_contraseña").submit(function(e){
					e.preventDefault();
						
						var password 	     = jQuery('#contraseña').val();
						var current_password = jQuery('#Contraseña_actual').val();
						var new_password     = jQuery('#Nueva_contraseña').val();
						var retype_password  = jQuery('#Repetir_nueva_contraseña').val();
						
					if (password != current_password){
						$.jGrowl("La contraseña no coincide con su contraseña actual", { header: 'No se pudo cambiar la contraseña' });
						
					}else if  (new_password != retype_password){
						$.jGrowl("La contraseña no coincide con su nueva contraseña",  { header: 'No se pudo cambiar la contraseña'});
						
					}else if ((password == current_password) && (new_password == retype_password)){
						var formData = jQuery(this).serialize();
						$.ajax({
						type: "POST",
						url: "actualizar_contraseña.php",
						data: formData,
						success: function(html){
						$.jGrowl("Su contraseña ha sido cambiada con éxito", { header: 'Cambio la contraseña correctamente' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'tablero.php'  }, delay);  
						}
					});
					}
				});
			});
			</script>
		</form>
			
			
    </div> <!-- /container -->
<?php include('footer.php'); ?>
<?php include('script.php'); ?>
  </body>
</html>