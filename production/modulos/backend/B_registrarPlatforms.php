<?php
$nombre = $_FILES['FileImage']['name'];
$guardado = $_FILES['FileImage']['tmp_name'];
if (!file_exists('imagenes')) {
	mkdir('imagenes',0777,true);
	if(file_exists('imagenes')){
		if (move_uploaded_file($guardado, 'imagenes/'.$nombre)){
			header("Location: ../../../production/V_consoles.php");
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if (move_uploaded_file($guardado, 'imagenes/'.$nombre)){
		header("Location: ../../../production/V_consoles.php");
	}else{
		echo "Archivo no se pudo guardar";
	}
}
?>
