<?php 
	require_once 'conexion.php';
	
	try{
		$sql = "INSERT INTO platforms (name, image) VALUES (?,?)";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nombrePlatformV'],
	            $_POST['nombreImgV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>