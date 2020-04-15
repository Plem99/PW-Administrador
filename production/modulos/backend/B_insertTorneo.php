<?php 
require_once 'conexion.php';

$titulo = $_POST['title'];
$juego = $_POST['game'];
$fecha = $_POST['dateP'];
$hora = $_POST['hourP'];
$maxJugadores = $_POST['maxGamer'];
$descr = $_POST['desc'];
$modalidad = $_POST['modality'];
$estatus = $_POST['status'];
$costo = $_POST['cost'];
$presencia = $_POST['present'];


try{

		$sql = "INSERT INTO tournaments (title, id_videogame, date, hour, quantity_max_gamers, description, modality, status ,costo, face_to_face) VALUES (:title, :id_videogame, :date, :hour, :quantity_max_gamers, :description, :modality, :status ,:costo, :face_to_face)";

    $stmt = $db->prepare($sql);

    $stmt->execute(['title' => $titulo, 'id_videogame' => $juego, 'date' => $fecha, 'hour' => $hora, 'quantity_max_gamers' => $maxJugadores, 'description' => $descr, 'modality' => $modalidad, 'status' => $estatus, 'costo' => $costo, 'face_to_face' => $presencia]);

}catch(PDOException $e) {
	echo $e;
}


 ?>