<?php 
	require_once 'conexion.php';
	//$db = new mysqli('ameb.tech',  'revoluxionAdmin', 'revoluxionPass','revoluxion_DB');
	$sql = "SELECT * FROM gamers";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {

	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	        echo "<tr>
		        	<td>".$row["username"]."</td>
		        	<td>".$row["name"]."</td>
		        	<td>".$row["last_name"]."</td>
		        	<td>".$row["gender"]."</td>
		        	<td>".$row["email"]."</td>
		        	<td>".$row["coins"]."</td>
		        	<td>".$row["facebook"]."</td>
		        	<td>".$row["twitch"]."</td>
		        	<td>".$row["youtube"]."</td>
		        	<td>".$row["birthdate"]."</td>
	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>