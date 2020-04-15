<?php
	require_once 'conexion.php';
	$idConsola = $_POST['idConsola'];
	$idVideogame = $_POST['idVideogame'];

	try{
		$sql = "DELETE FROM consoleVideogames WHERE consoles_id = '$idConsola'  AND videogames_id = '$idVideogame' ";
		$result = $db->query($sql);
	}catch(PDOException $e){
        echo $e;
    }
?>