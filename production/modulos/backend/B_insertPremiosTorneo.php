<?php 
require_once 'conexion.php';

$pGuno = $_POST['gUnoP'];
$pGdos = $_POST['gDosP'];
$pGtres = $_POST['gTresP'];
$torneo = $_POST['idT'];


try{

		$sql = "INSERT INTO rewards (positions, reward, id_tournament) VALUES (:positions, :reward, :id_tournament)";

    $stmt = $db->prepare($sql);

    $stmt->execute(['positions' => 1, 'reward' => $pGuno, 'id_tournament' => $torneo]);

}catch(PDOException $e) {
	echo $e;
}

try{

		$sql = "INSERT INTO rewards (positions, reward, id_tournament) VALUES (:positions, :reward, :id_tournament)";

    $stmt = $db->prepare($sql);

    $stmt->execute(['positions' => 2, 'reward' => $pGdos, 'id_tournament' => $torneo]);

}catch(PDOException $e) {
	echo $e;
}

try{

		$sql = "INSERT INTO rewards (positions, reward, id_tournament) VALUES (:positions, :reward, :id_tournament)";

    $stmt = $db->prepare($sql);

    $stmt->execute(['positions' => 3, 'reward' => $pGtres, 'id_tournament' => $torneo]);

}catch(PDOException $e) {
	echo $e;
}

 ?>