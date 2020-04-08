<?php 
	session_start();
	require_once 'conexion.php';

	$usuario = $_POST['usuario'];
	$password = $_POST['contrasena'];
	$nombre = $_POST['nombre'];
	$apeMat = $_POST['apeMat'];
	$apePat = $_POST['apePat'];

	//$sql = "SELECT * FROM tadmin WHERE usuario='$usuario' AND contrasena='$password'";
	$sql = "INSERT INTO tAdmin (nombre, apePat, apeMat, usuario, contrasena) VALUES ('$nombre', '$apePat', '$apeMat', '$usuario', '$password')";
	$result = mysqli_query($db, $sql);
	if($result){
		echo'<script type="text/javascript">
    		alert("Usuario Registrado");
    		window.location.href="../../../index.php";
    		</script>';
	}else{
		echo'<script type="text/javascript">
    		alert("Error al registrar administrador");
    		</script>';
	}
	/*if (mysqli_num_rows($result) > 0) {
		$_SESSION['usuario'] = $usuario;
		header("Location: ../../../production");
	}else{
		header("Location: ../../../index.php");
		
	}*/
 ?>