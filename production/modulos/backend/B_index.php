<?php
	require_once 'conexion.php'; 	
	
	$Admin = "SELECT count(id) 'idAdmin' FROM gamers WHERE role='0'";
	$adminResult = $db->query($Admin);
	$rowAdmin = $adminResult->fetch(PDO::FETCH_ASSOC);

	$Gamer = "SELECT count(id) 'idGamer' FROM gamers WHERE role='1'";
	$gamerResult = $db->query($Gamer);
	$rowGamer = $gamerResult->fetch(PDO::FETCH_ASSOC);

	$Consoles = "SELECT count(id) 'idConsoles' FROM consoles ";
	$consolesResult = $db->query($Consoles);
	$rowConsoles = $consolesResult->fetch(PDO::FETCH_ASSOC);

	$Videogames = "SELECT count(id) 'idVideogames' FROM videogames ";
	$videogamesResult = $db->query($Videogames);
	$rowVideogames = $videogamesResult->fetch(PDO::FETCH_ASSOC);


?>