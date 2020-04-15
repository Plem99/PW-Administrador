

<?php 

	require_once 'conexion.php';
	$sql = "SELECT T.id, T.title, date, hour, face_to_face, quantity_max_gamers, V.title Juego FROM tournaments T JOIN videogames V ON T.id_videogame = V.id WHERE status = 'Abierto' ";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {

	    	$fecha = $row['date'] . " - " . $row['hour'];


	    	echo "  <div class='card border-primary mb-3' style='max-width: 22rem; margin-left:35px;' >
					  <div class='card-header'><button type='button' class='btn btn-link' value='". $row['id'] ."'><h3>". $row['title'] ."</3></button></div>
					  <div class='card-body text-primary'>
					    <p class='card-title'><b>". $fecha ."</b></p>
					    <p class='card-text'><b>Videojuego: </b>". $row['Juego'] ."</p>
					    <p class='card-text'><b>Forma: </b>". $row['face_to_face'] ."</p>
					    <p class='card-text'><b>Max. Gamers:</b> ". $row['quantity_max_gamers'] ."</p>

							 
					    <center>
	

							 <button onclick='setCancelarTorneo()' id='btnCancelT' class='btn btn-outline-danger' value='". $row['id'] ."' data-toggle='modal' data-target='' >Cancelar</button>


					     <button onclick='asignarGanadores(".$row['id'].")' id='btnWinnersT' class='btn btn-outline-success' value='". $row['id'] ."' data-toggle='modal' data-target='#modalGanadoresTorneo' >Asignar  gnadores</button>

					    </center>

							




					  </div>
					</div>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>



