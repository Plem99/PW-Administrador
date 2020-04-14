<?php 
	require_once 'conexion.php';
	

	//$nombre = $_FILES['FileImage']['name'];
	//$guardado = $_FILES['FileImage']['tmp_name'];

	//$nombre = $_FILES["FileImage"]["tmp_name"];

	//echo $nombre;
	//echo $guardado;
	try{
		$sql = "INSERT INTO platforms (name, image) VALUES (?,?)";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nombrePlatformV'],
	            $_POST['nombreImagenV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
		
/*
	if (!file_exists('imagenes')) {
		mkdir('imagenes',0777,true);
		if(file_exists('imagenes')){
			if (move_uploaded_file($nombre, 'imagenes/'.$nombre)){
				//header("Location: ../../../production/V_consoles.php");
				try{
					$sql = "INSERT INTO platforms (name, image) VALUES (?,?)";
					$result = $db->prepare($sql);
					$result->execute([
				            $_POST['nombrePlatformV'],
				            $_POST['nombreImagenV']
				        ]);
					//$result->closeCursor();
				}catch(PDOException $e){
			        echo $e;
			    }
			}else{
				echo "Archivo no se pudo guardar";
			}
		}
	}else{
		if (move_uploaded_file($nombre, 'imagenes/'.$nombre)){
			echo "OJO";
			//header("Location: ../../../production/V_consoles.php");
			try{
				$sql = "INSERT INTO platforms (name, image) VALUES (?,?)";
				$result = $db->prepare($sql);
				$result->execute([
			            $_POST['nombrePlatformV'],
			            $_POST['nombreImagenV']
			        ]);
				//$result->closeCursor();
			}catch(PDOException $e){
		        echo $e;
		    }
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
	
    */
 ?>