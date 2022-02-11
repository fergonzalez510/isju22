<?php
		include('dbcon.php');
		include('session.php');
		
				$estudiante_id = $_POST['estudiante_id'];
				$nombres   	  = $_POST['nombres'];
				$apellido     = $_POST['apellido'];
				$genero_id    = $_POST['genero_id'];
				$email        = $_POST['email'];
				$telefono     = $_POST['telefono'];
				$fec_nac      = $_POST['fec_nac'];
				$direccion    = $_POST['direccion'];
				$localidad    = $_POST['localidad'];
				$carrera_id   = $_POST['carrera_id'];
		
		mysqli_query($connection,"update estudiantes set nombres = '$nombres', apellido ='$apellido', genero_id ='$genero_id', email ='$email', telefono='$telefono', fec_nac ='$fec_nac', direccion ='$direccion', localidad ='$localidad', carrera_id ='$carrera_id' where estudiante_id = '$estudiante_id'");

		mysqli_query($connection,"insert into activodad_log (nombres,fecha,accion) values('$nombre',NOW(),'Updated estudiante $nombre $apellido')");

		
		