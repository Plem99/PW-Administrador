

<?php 
require_once 'conexion.php';


$gUno = $_POST['gUnoP'];
$gDos = $_POST['gDosP'];
$gTres = $_POST['gTresP'];

$idTorneo = $_POST['idT'];

try{

	$sql = "UPDATE rewards R SET teams_id = :teams_id WHERE R.positions = 1 AND R.id_tournament = $idTorneo";

    $stmt = $db->prepare($sql);

    $stmt->execute(['teams_id' => $gUno]);

}catch(PDOException $e) {
	echo $e;
}

try{

	$sql = "UPDATE rewards R SET teams_id = :teams_id WHERE R.positions = 2 AND R.id_tournament = $idTorneo";

    $stmt = $db->prepare($sql);

    $stmt->execute(['teams_id' => $gDos]);

}catch(PDOException $e) {
	echo $e;
}

try{

	$sql = "UPDATE rewards R SET teams_id = :teams_id WHERE R.positions = 3 AND R.id_tournament = $idTorneo";

    $stmt = $db->prepare($sql);

    $stmt->execute(['teams_id' => $gTres]);

}catch(PDOException $e) {
	echo $e;
}


$statusN = "Finalizado";

try{

	$sql = "UPDATE tournaments SET status = :status WHERE tournaments.id = $idTorneo";

    $stmt = $db->prepare($sql);

    $stmt->execute(['status' => $statusN]);

}catch(PDOException $e) {
	echo $e;
}

 ?>