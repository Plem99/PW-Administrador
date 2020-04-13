<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE videogames SET title=?, image=? WHERE id='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['tituloGamesActualizarV'],
	            $_POST['imagenActualizarV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>