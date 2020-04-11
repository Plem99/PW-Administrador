<?php
	require_once 'conexion.php'; 	
	
	$sql = "SELECT * FROM gamers WHERE id =".$id;
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_ASSOC);

	if($_POST['val']==2){
		index();
	}

	function index(){
		$sql2 = "SELECT * FROM gamers";
		$result2 = $db->query($sql2);
		$row2 = $result2->fetch(PDO::FETCH_ASSOC);
	}
?>