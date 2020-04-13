<?php 
	require_once 'conexion.php';
	
	try{
		$sql = "INSERT INTO consoles (number_console, serial_console, id_platform) VALUES (?,?,?)";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['numConsolaV'],
	            $_POST['serialV'],
	            $_POST['plataformaV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>