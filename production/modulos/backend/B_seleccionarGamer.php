<?php
	require_once 'conexion.php'; 	
	//$sql = "SELECT idGamer, nombre, apePat, apeMat, genero, direccion, tel FROM tGamers";
	$sql = "SELECT * FROM gamers WHERE id =".$id;
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_ASSOC);
?>