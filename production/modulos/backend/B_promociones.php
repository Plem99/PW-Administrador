<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, name, description FROM promotions";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "
				 	<tr>
				 		<td width='150px'>" . $row['id'] . "</td>
				 		<td width='200px'>" . $row['name'] . "</td>
				 		<td width='120px'>" . $row['description']. "</td>

				 		<td width='80px'>

							<center>

							<button type='button' name='t_ID' class='btn btn-outline-info' value='" . $row['P.id'] . "' data-toglle='modal' data-target='modalAgregar' >Editar</button>
							</center>
				 		</td>
				 		<td width='80px'>

							<center>

							<button type='button' name='t_ID' class='btn btn-outline-info' value='" . $row['P.id'] . "' data-toglle='modal' data-target='modalAgregar' >Editar</button>
							</center>
				 		</td>
				 	</tr>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>