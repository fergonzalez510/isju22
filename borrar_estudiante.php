<?php
include('dbcon.php');
include('sesion.php');

	if (isset($_POST['borrar_estudiante'])){
		$id=$_POST['selector'];
		$N = count($id);
			for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($connection,"select * from estudiantes where estudiante_id ='$id[$i]'");
	$row = mysqli_fetch_array($query);
	$nombres = $row['nombres'];
	$apellido = $row['apellido'];
	
	mysqli_query($connection,"insert into actividad_log (nombreusuario,fecha,accion) values('$user_username',NOW(),'borrar estudiante $nombres $apellido')");

	mysqli_query($connection,"DELETE FROM estudiantes where alumno_id ='$id[$i]'");
	mysqli_query($connection,"DELETE FROM payment_check where alumno_id ='$id[$i]'");
}
header("location: estudiantes.php");
}
?>