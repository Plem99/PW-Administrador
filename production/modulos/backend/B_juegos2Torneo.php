<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, title FROM videogames";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo " <option value='". $row['id'] ."'>". $row['title'] ."</option>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();
 ?>