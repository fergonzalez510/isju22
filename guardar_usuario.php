<?php
include('dbcon.php');
include('sesion.php');
$status= $_POST['estado'];
$fname = $_POST['nombre'];
$lname = $_POST['apellido'];
$uname = $fname.'.'.$lname;

mysqli_query($connection,"insert into usuarios (nombreusuario,contraseña,nombre,apellido,estado) values('$uname','12345','$fname','$lname','$status')")or die(mysqli_error());
mysqli_query($connection,"insert into actividad_log (fecha,nombreusuario,accion) values(NOW(),'$user_username','Agregar Usuario $uname')")or die(mysqli_error());
?>