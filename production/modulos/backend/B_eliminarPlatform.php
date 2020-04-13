<?php 
	require_once 'conexion.php';

	$idEliminar = $_POST['idEliminarV'];
	try{
		$sql = "DELETE FROM platforms WHERE id='$idEliminar'";
		$result = $db->query($sql);
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>