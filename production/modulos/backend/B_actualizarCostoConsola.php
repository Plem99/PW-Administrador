<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE hourCosts SET cost=?, hour=?, coins_per_hour=?, cost_coin=?, id_plataforma=? WHERE id='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['costoMXN'],
                $_POST['horas'],
                $_POST['coinsplayer'],
                $_POST['costCoin'],
                $_POST['plataformaValor']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>