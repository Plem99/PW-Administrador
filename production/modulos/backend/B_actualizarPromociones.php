<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE promotions SET name=?, description=? WHERE id='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nombrePromo'],
                $_POST['descripcionPromo']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>