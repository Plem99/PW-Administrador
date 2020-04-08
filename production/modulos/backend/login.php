<?php 
	session_start();
	require_once 'conexion.php';

	$usuario = $_POST['usuario'];
	$password = $_POST['contrasena'];

	$sql = "SELECT * FROM tAdmin WHERE usuario='$usuario' AND contrasena='$password'";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['usuario'] = $usuario;
		header("Location: ../../../production");
	}else{
		header("Location: ../../../index.php");
	}
 ?>