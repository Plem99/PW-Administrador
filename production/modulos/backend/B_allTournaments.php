<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, title, 'date', hour, face_to_face, quantity_max_gamers, status FROM `tournaments`";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		$i=0;

		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "<table>
				 	<tr>
				 		<td width='150px'>" . $row['title'] . "</td>
				 		<td width='120px'>" . $row['date'] . "</td>
				 		<td width='120px'>" . $row['hour']. "</td>
				 		<td width='150px'>" . $row['face_to_face'] . "</td>
				 		<td>" . $row['quantity_max_gamers'] . "</td>
				 		<td width='100px'>" . $row['status'] . "</td>
				 		<td><form action='modulos/backend/B_allInfoTournamentID.php' method='post'>
						        <button type='submit' name='t_ID' class='btn btn-outline-info' value='" . $row['id'] . "'>Info</button>
						    </form></td>
				 	</tr>
				 </table>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();
 ?>


    