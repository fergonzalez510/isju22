<?php
		require_once 'dbcon.php';
		
		$username = $_POST['nombreusuario'];
		$password = $_POST['contraseña'];
		/* student */
		$query = "SELECT * FROM usuarios WHERE nombreusuario='$username' AND contraseña='$password'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
		$pass=$row['contraseña'];
		$status =$row['estado'];
		
		if( $num_row > 0 ) { 
		session_start();
		$_SESSION['id']=$row['usuarioid'];
		
		
		if($status=='administrador'){
			echo 'true_admin';	
			mysqli_query($connection,"insert into usuario_log (nombreusuario,fecha_log,usuarioid)values('$username',NOW(),".$row['usuarioid'].")");
		}else
		if($status=='secretaria'){
			echo 'true_serc';	
			mysqli_query($connection,"insert into usuario_log (nombreusuario,fecha_log,usuarioid)values('$username',NOW(),".$row['usuarioid'].")");
		}else
		if($status=='preceptor'){
			echo 'true_prec';	
			mysqli_query($connection,"insert into usuario_log (nombreusuario,fecha_log,usuarioid)values('$username',NOW(),".$row['usuarioid'].")");
		}else
		if($status=='profesor'){
			echo 'true_prof';	
			mysqli_query($connection,"insert into usuario_log (nombreusuario,fecha_log,usuarioid)values('$username',NOW(),".$row['usuarioid'].")");
		}else
		if($status=='alumno'){
			echo 'true_alum';	
			mysqli_query($connection,"insert into usuario_log (nombreusuario,fecha_log,usuarioid)values('$username',NOW(),".$row['usuarioid'].")");
		}
		else{ 
				echo 'false';
		}
		}	
		?>