<?php
	include_once 'conexion.php';

	$sql= "SELECT * FROM candyStore";
	$result = $db->query($sql);
	
	if ($result) {
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			echo "<option value=".$row['id_dulceria']." selected>".$row['candy_name']."</option>";
		}
	}else{
		echo " ";
	}
	$result->closeCursor();
?>