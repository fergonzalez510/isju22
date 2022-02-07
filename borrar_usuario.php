<?php
include('dbcon.php');
include('sesion.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($connection,"select * from usuario where usuarioid ='$id[$i]'")or die(mysql_error());
	$row = mysqli_fetch_array($query);
	$uname = $row['nombreusuario'];

	mysqli_query($connection,"insert into activity_log (nombreusuario,date,action) values('$user_username',NOW(),'Deleted  user $uname')")or die (mysql_error());
	mysqli_query($connection,"DELETE FROM usuarios where user_id='$id[$i]'");
}
header("location: usuarios.php");
}
?>