<?php 
	require_once 'conexion.php';
	$sql = "SELECT HC.id, P.name, HC.cost, HC.cost_coin, HC.hour,HC.coins_per_hour FROM platforms P JOIN hourCosts HC ON HC.id_plataforma = P.id ";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "
				 	<tr>
				 		<td width='150px'>" . $row['id'] . "</td>
				 		<td width='120px'>" . $row['name'] . "</td>
				 		<td width='120px'>" . $row['cost']. "</td>
				 		<td width='150px'>" . $row['cost_coin'] . "</td>
				 		<td>" . $row['hour'] . "</td>
				 		<td width='100px'>" . $row['coins_per_hour'] . "</td>

				 		<td><button type='button' name='t_ID' class='btn btn-outline-info' value='" . $row['id'] . "' data-toglle='modal' data-target='modalAgregar' >Editar</button></td>
				 		<td><button type='button' name='t_ID' class='btn btn-outline-info' value='" . $row['id'] . "'>Eliminar</button></td>
				 	</tr>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>