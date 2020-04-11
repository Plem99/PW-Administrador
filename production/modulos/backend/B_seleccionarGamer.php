<?php
	require_once 'conexion.php'; 	
	
	$sql = "SELECT * FROM gamers WHERE id =".$id;
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_ASSOC);

?>