<?php
	include('dbcon.php');
	include('sesion.php');
$carrera_nombre = $_POST['carrera_nombre'];
$curso = $_POST['curso'];
$carrera_costo = $_POST['carrera_costo'];

mysqli_query($connection,"insert into carrera (carrera_nombre,curso,carrera_costo) values('$carrera_nombre','$curso','$carrera_costo')")or die(mysqli_error());
mysqli_query($connection,"insert into actividad_log (fecha,nombreusuario,accion) values(NOW(),'$usuario_nombreusuario','Add Class $carrera_nombre')")or die(mysqli_error());
?>