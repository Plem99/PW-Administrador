<?php
	require_once 'conexion.php';
	$idEliminar = $_POST['idEliminarV'];
	try{
		$sql = "DELETE FROM candyStore WHERE id_dulceria='$idEliminar'";
		$result = $db->query($sql);
	}catch(PDOException $e){
        echo $e;
    }
 ?>