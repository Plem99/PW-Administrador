<?php 
	require_once 'conexion.php';
	
	$id = $_POST['idV'];

	//$sql = "SELECT * FROM participants p, gamers g WHERE gamers_id='$id'";

	$sql = "SELECT t.title 'titulo', t.date 'fecha', t.hour 'hora', t.modality 'modalidad', t.status 'estatus', t.face_to_face 'tipo' FROM participants p , tournaments t WHERE p.gamers_id='$id' ";

	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {

	        echo "<tr>
		        	<td>".$row["titulo"]."</td>
		        	<td>".$row["fecha"]."</td>
		        	<td>".$row["hora"]."</td>
		        	<td>".$row["modalidad"]."</td>
		        	<td>".$row["tipo"]."</td>
		        	<td>".$row["estatus"]."</td>
	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>