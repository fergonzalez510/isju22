 <?php
 include('dbcon.php');
 include('sesion.php');
 $new_password  = $_POST['Nueva_contraseña'];
 mysqli_query($connection,"update usuarios set contraseña = '$new_password' where usuarioid = '$session_id'") or die(mysqli_error());
 ?>