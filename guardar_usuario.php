<?php
    include('dbcon.php');
    include('sesion.php');
    $estado= $_POST['estado'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nombreusuario = $nombre.'.'.$apellido;

    mysqli_query($connection,"insert into usuarios (nombreusuario,contraseña,nombre,apellido,estado) values('$nombreusuario','12345','$nombre','$apellido','$estado')");

    mysqli_query($connection,"insert into actividad_log (fecha,nombreusuario,accion) values(NOW(),'$usuarionombre','Agregar Usuario $usuarionombre')");
?>