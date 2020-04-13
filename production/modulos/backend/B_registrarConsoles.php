<?php
require_once 'conexion.php';
echo $_POST['numeroC'];
echo $_POST['serialC'];
echo $_POST['plataformaC'];
$sql = "INSERT INTO consoles ('number','serial','id_platform') VALUES (?,?,?)";
$result = $db->prepare($sql);
$result->execute([
	            $_POST['numeroC'],
	            $_POST['serialC'],
	            $_POST['plataformaC']
	        ]);
?>