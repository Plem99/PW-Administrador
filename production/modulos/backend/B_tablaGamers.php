<?php 
	require_once 'conexion.php';
	//$db = new mysqli('ameb.tech',  'revoluxionAdmin', 'revoluxionPass','revoluxion_DB');
	$sql = "SELECT * FROM gamers";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
		$i=0;
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	$_SESSION['id'] = $row['id'];
	    	$valor[$i] = $_SESSION['id'];

	    	if ($row['gender']=="M") {
	    	 	$genero="Masculino";
	    	 }elseif ($row['gender']=="F") {
	    	 	$genero="Femenino";
	    	 }
	        echo "<tr>
		        	<td>".$row["username"]."</td>
		        	<td>".$row["name"]."</td>
		        	<td>".$row["last_name"]."</td>
		        	<td>".$genero."</td>
		        	<td>".$row["email"]."</td>
		        	<td>".$row["coins"]."</td>
		        	<td>".$row["birthdate"]."</td>
		        	<td>".
		        	"<button id='btnEliminar' onclick='btnEliminar(".$valor[$i].")' class='btn  btn-danger btnEliminar' >"."<i class='fa fa-times'></i>". " Eliminar".
		        	"</button>".
		        	"</td>

	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>