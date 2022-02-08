
		<?php
		include('dbcon.php');
		include('sesion.php');
		
			$nombres   = $_POST['nombres'];
			$apellido  = $_POST['apellido'];
			$genero    = $_POST['genero'];
			$email     = $_POST['email'];
			$telefono  = $_POST['telefono'];
			$fec_nac   = $_POST['fec_nac'];
			$direccion = $_POST['direccion'];
			$localidad = $_POST['localidad'];
			$carrera_id   = $_POST['carrera_id'];
		
		mysqli_query($connection,"insert into estudiantes (nombres, apellido, genero, email, telefono, fec_nac, direccion, localidad, carrera_id) values ('$nombres', '$apellido', '$genero', '$email', '$telefono', '$fec_nac', '$direccion', '$localidad', '$carrera_id')")or die(mysqli_error());
		
		mysqli_query($connection,"insert into actividad_log (nombreusuario, fecha, accion) values ('$nombreusuario', NOW(), 'Agergar estudiante $nombres $apellido')")or die (mysqli_error());
		
		$result = mysqli_query($connection,"select * from estudiantes where nombres='$nombres' AND apellido='$apellido' AND telefono='$telefono' ")or die(mysqli_error());
		while($row = mysqli_fetch_array($result)){
				$alumno_id = $row['alumno_id'];
		}
		$result1 = mysqli_query($connection,"select * from carrera where carrera_nombre='$año_estudiante'  ")or die(mysqli_error());
		while($row1 = mysqli_fetch_array($result1)){
				$costo_carrera = $row1['costo_carrera'];
		}
		?>