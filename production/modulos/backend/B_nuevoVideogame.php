<?php 
	require_once 'conexion.php';
	
	try{
		$sql = "INSERT INTO videogames (title, image) VALUES (?,?)";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['tituloGamesV'],
	            $_POST['imagenV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>