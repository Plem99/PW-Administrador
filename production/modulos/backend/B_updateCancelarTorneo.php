<?php 
require_once 'conexion.php';

$statusN = "Cancelado";

echo $statusN;

$idTorneo = $_POST['idT'];

try{

	$sql = "UPDATE tournaments SET status = :status WHERE tournaments.id = $idTorneo";

    $stmt = $db->prepare($sql);

    $stmt->execute(['status' => $statusN]);

}catch(PDOException $e) {
	echo $e;
}


 ?>

