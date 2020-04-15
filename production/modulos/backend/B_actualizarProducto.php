<?php
	require_once 'conexion.php';
	$id = $_POST['id'];
	try{
		$sql = "UPDATE candyStore SET candy_name=?, cost_mxn=?, coins_per_candy=? WHERE id_dulceria='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nombre'],
	            $_POST['costo'],
	            $_POST['monedas']
	        ]);
	}catch(PDOException $e){
        echo $e;
    }

?>