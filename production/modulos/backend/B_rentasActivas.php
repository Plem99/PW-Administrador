

<?php 
	require_once 'conexion.php';
	$sql = "SELECT R.id, CONCAT(G.name, ' ',G.last_name) Nombre, G.username, G.photo, G.coins, R.hour_init, R.hour_end, C.serial_console, P.name Consola, H.cost, H.cost_coin FROM rents R JOIN gamers G ON R.gamers_id = G.id JOIN consoles C ON R.id_console = C.id JOIN platforms P ON C.id_platform = P.id JOIN hourCosts H ON H.id_plataforma = P.id WHERE R.hour_end IS NULL";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "  <div class='card border-primary mb-3' style='max-width: 22rem; margin-left:45px;' >
					  <div class='card-header'>". $row['username'] ."</div>
					  <img class='card-img-top'  alt='Card image cap'>
					  <div class='card-body text-primary'>
					    <h5 class='card-title'>". $row['Nombre'] ."</h5>
					    <p class='card-text'>Monedas usuario: ". $row['coins'] ."</p>
					    <p class='card-text'>Hora de inicio: ". $row['hour_init'] ."</p>
					    <p class='card-text'>Plataforma: ". $row['Consola'] ."</p>
					    <p class='card-text'>Consola: ". $row['serial_console'] ."</p>
					    <p class='card-text'>Costo: ". $row['cost'] ."</p>
					    <p class='card-text'>Costo en monedas: ". $row['cost_coin'] ."</p>
					    <button onclick='finRenta()' id='btnRentaID' class='btn btn-primary' value='". $row['id'] ."' data-toggle='modal' data-target='#modalFinalizarRenta' >Finalizar hora</button>

					  </div>
					</div>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>


