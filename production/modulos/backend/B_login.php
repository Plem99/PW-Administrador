<?php 
	session_start();
	require_once 'conexion.php';

	$role = 0;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM gamers WHERE role = '$role' AND username = '$username' AND password = '$password' " ;
	$result = $db->query($sql);


	if ($result->fetchColumn() > 0) {
		$_SESSION['username'] = $username;
		header("Location: ../../../production");
		echo "si apso";
	}else{
		header("Location: ../../../index.php");
		echo "no apso";
	}

 ?>