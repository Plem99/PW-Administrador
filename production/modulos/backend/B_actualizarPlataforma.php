<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE platforms SET name=?, image=? WHERE id='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['tituloPlataformaActualizarV'],
	            $_POST['imagenPlataformaActualizarV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>