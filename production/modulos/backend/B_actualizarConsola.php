<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE consoles SET number_console=?, serial_console=?, id_platform=? WHERE id='$id'";
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