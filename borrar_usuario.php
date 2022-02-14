<?php
include('dbcon.php');
include('sesion.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($connection,"select * from usuarios where usuarioid ='$id[$i]'");
	$row = mysqli_fetch_array($query);
	$nombreusuario = $row['nombreusuario'];

	mysqli_query($connection,"insert into actividad_log (nombreusuario,fecha,accion) values('$nombreusuario',NOW(),'Deleted  user $nombreusuario')");
	mysqli_query($connection,"DELETE FROM usuarios where usuarioid='$id[$i]'");
}
header("location: usuarios.php");
}
?>