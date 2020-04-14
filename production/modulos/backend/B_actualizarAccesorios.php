<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE accessories SET name=?, cost=? WHERE id='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nombreAccesorio'],
                $_POST['costoAccesorio']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>