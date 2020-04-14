
<?php 
	require_once 'conexion.php';
	$sql = "SELECT R.id, CONCAT(G.name, ' ',G.last_name) Nombre, G.username, R.hour_init, R.hour_end, C.serial_console, P.name Consola, H.cost, H.cost_coin, T.type, R.total FROM rents R JOIN gamers G ON R.gamers_id = G.id JOIN consoles C ON R.id_console = C.id JOIN platforms P ON C.id_platform = P.id JOIN hourCosts H ON H.id_plataforma = P.id JOIN typePay T on R.typePay_id = T.id ";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "  
				<tr>
	    	<td>". $row['id'] ."</td>
			<td>". $row['Nombre'] ."</td>
			<td>". $row['username'] ."</td>
			<td>". $row['hour_init'] ."</td>
			<td>". $row['hour_end'] ."</td>
			<td>". $row['Consola'] ."</td>
			<td>". $row['serial_console'] ."</td>
			<td>". $row['cost'] ."</td>	
			<td>". $row['cost_coin'] ."</td>
			<td>". $row['type'] ."</td>		
			<td>". $row['total'] ."</td>

			</td>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>
