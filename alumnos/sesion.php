<?php
 session_start(); 
 require_once 'dbcon.php';
//Compruebe si la variable de sesión SESS_MEMBER_ID está presente o no
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];
$query= mysqli_query($connection,"select * from usuarios where usuarioid = '$session_id'") or die (mysql_error());
	$row = mysqli_fetch_array($query);
	$user_username = $row['nombreusuario'];
?>