<?php 
	require_once 'conexion.php';


	$sql = "SELECT TIMESTAMPDIFF(HOUR,'2007-12-30 12:01:01','2007-12-31 10:02:00');";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo ;
	    }
	} else {
	    echo "0 results";
	} 
	$result->closeCursor();

 ?>