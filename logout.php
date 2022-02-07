<?php
include('dbcon.php');
include('sesion.php');
mysqlI_query($connection,"update usuario_log set fecha_log = NOW() where usuarioid = '$session_id' ")or die(mysql_error());
session_destroy();
header('location:index.php'); 
?>