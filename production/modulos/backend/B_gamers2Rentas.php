<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, username FROM gamers";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo " <option value='". $row['id'] ."'>". $row['username'] ."</option>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();
 ?>
