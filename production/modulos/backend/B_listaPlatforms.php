<?php
	include_once 'conexion.php';
	$sql= "SELECT * FROM platforms";
	$result = $db->query($sql);
	if ($result) {
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			echo "<option value=".$row['id']." selected>".$row['name']."</option>";
		}
	}else{
		echo " ";
	}
	$result->closeCursor();
?>