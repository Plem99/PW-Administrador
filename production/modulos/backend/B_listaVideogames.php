<?php
	include_once 'conexion.php';
	$sql= "SELECT * FROM videogames";
	$result = $db->query($sql);
	if ($result) {
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='".$row['id']."'>".$row['title']."</option>";
		}
	}else{
		echo " ";
	}
	$result->closeCursor();
?>