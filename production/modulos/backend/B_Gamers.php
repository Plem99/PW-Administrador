<?php 
	/*require_once 'conexion.php';
	include "B_GamersCard.php"; 	
	$sql = "SELECT idGamer, nombre, apePat, apeMat, genero, direccion, tel FROM tGamers";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {
	    //echo "<table id='datatable-buttons' class='table table-striped table-bordered' style='width:100%'>";
	    //echo "<tr><th>Nombre</th><th>Hdec</th><th>Proteinas</th><th>Lipidos</th><th>Calorias</th></tr>";
	    // output data of each row
		$i=0;
	    while($row = $result->fetch_assoc()) {
	    	$_SESSION['idGamer'] = $row['idGamer'];
	    	$valor[$i] = $_SESSION['idGamer']; 
	    	//echo $valor[$i];
	    	top();
	        echo "<h2>" . $row["nombre"]. " ". $row['apePat']." ".$row['apeMat']."</h2><p><strong>" ."Genero: ". "</strong>". $row['genero'] ."</p><ul class='list-unstyled'>" . "<li><i class='fa fa-building'></i>". "Dirección: ". $row['direccion']. "<li>"."<li><i class='fa fa-phone'></i>". "Telefono: ". $row['tel']. "<li></ul>";
	        down($valor[$i]);
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$db->close();*/
 ?>