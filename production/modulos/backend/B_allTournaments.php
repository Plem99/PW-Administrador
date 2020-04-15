<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, title, date, hour, face_to_face, quantity_max_gamers, status FROM tournaments WHERE status <> 'Abierto'";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "  
				<tr>
	    	<td>". $row['title'] ."</td>
			<td>". $row['date'] ."</td>
			<td>". $row['hour'] ."</td>
			<td>". $row['face_to_face'] ."</td>
			<td>". $row['quantity_max_gamers'] ."</td>
			<td>". $row['status'] ."</td>
			<td><button value='".$row['id']."'></button>Info</td>
			<td>". $row['cost'] ."</td>	
			</tr>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>


