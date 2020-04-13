<?php 
	require_once 'conexion.php';

	$idEliminar = $_POST['idEliminarV'];
	try{
		$sql = "DELETE FROM videogames WHERE id='$idEliminar'";
		$result = $db->query($sql);
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>