<?php
include('dbcon.php');
include('sesion.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($connection,"select * from estuantes where alumno_id ='$id[$i]'")or die(mysql_error());
	$row = mysqli_fetch_array($query);
	$fname = $row['nombres'];
	$mname = $row['apellido'];
	mysqli_query($connection,"insert into actividad_log (nombreusuario,fecha,accion) values('$user_username',NOW(),'Deleted Student $fname $mname')")or die (mysql_error());
	mysqli_query($connection,"DELETE FROM estudiantes where alumno_id ='$id[$i]'");
	mysqli_query($connection,"DELETE FROM payment_check where alumno_id ='$id[$i]'");
}
header("location: estudiantes.php");
}
?>