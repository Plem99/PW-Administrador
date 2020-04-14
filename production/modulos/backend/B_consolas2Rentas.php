<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, serial_console FROM consoles";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo " <option value='". $row['id'] ."'>". $row['serial_console'] ."</option>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();
 ?>
