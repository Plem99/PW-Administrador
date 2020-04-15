<?php
	require_once 'conexion.php';
	try{
		$sql = "INSERT INTO candyStore (candy_name,cost_mxn,coins_per_candy) VALUES (?,?,?)";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nombre'],
	            $_POST['costo'],
	            $_POST['monedas'],
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }

?>