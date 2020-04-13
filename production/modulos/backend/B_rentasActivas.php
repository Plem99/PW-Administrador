

<?php 
	require_once 'conexion.php';
	$sql = "SELECT CONCAT(G.name, G.last_name) Nombre, G.username, G.photo, G.coins, R.hour_init, R.hour_end, C.number_console, P.name Consola, H.cost, H.cost_coin FROM rents R JOIN gamers G ON R.gamers_id = G.id JOIN consoles C ON R.id_console = C.id JOIN platforms P ON C.id_platform = P.id JOIN hourCosts H ON H.id_plataforma = P.id WHERE R.hour_end IS NULL";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "  <div class='card border-primary mb-3' style='max-width: 18rem;'>
					  <div class='card-header'>". $row['username'] ."</div>
					  <img class='card-img-top' src='...' alt='Card image cap'>
					  <div class='card-body text-primary'>
					    <h5 class='card-title'>". $row['Nombre'] ."</h5>
					    <p class='card-text'>Monedas usuario: ". $row['coins'] ."</p>
					    <p class='card-text'>Hora de inicio: ". $row['hour_init'] ."</p>
					    <p class='card-text'>Hora de fin: ". $row['hour_end'] ."</p>
					    <p class='card-text'>Plataforma: ". $row['Consola'] ."</p>
					    <p class='card-text'>Numero de consola: ". $row['number_console'] ."</p>
					    <p class='card-text'>Costo: ". $row['cost'] ."</p>
					    <p class='card-text'>Costo en monedas: ". $row['cost_coin'] ."</p>
					    <a href='' class='btn btn-primary'>Finalizar renta</a>
					  </div>
					</div>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>


 


