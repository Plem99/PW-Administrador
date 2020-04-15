<?php
	require_once 'conexion.php';
	$sql = "SELECT gamers.name, candyStore.candy_name, total, payment, change_purchase, date_purchase FROM purchase JOIN gamers ON purchase.gamers_id = gamers.id JOIN candyStore ON purchase.candyStore_id = candyStore.id_dulceria ";
	$result = $db->query($sql);
	if ($result = $db->query($sql)) {
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	        echo "<tr>
		        	<td>".$row["name"]."</td>
		        	<td>".$row["candy_name"]."</td>
		        	<td>".$row["total"]."</td>
		        	<td>".$row["payment"]."</td>
		        	<td>".$row["change_purchase"]."</td>
		        	<td>".$row["date_purchase"]."</td>
	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>