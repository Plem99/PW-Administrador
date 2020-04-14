<?php 
	require_once 'conexion.php';


	$idRent = $_POST['idRenta'];
	$timeNow = date('H:i:s');


	$sql = "UPDATE rents SET hour_end = :hour_end WHERE rents.id = $idRent";

    $stmt = $db->prepare($sql);

    $stmt->execute(['hour_end' => $timeNow]);

 ?>


<?php 
require_once 'conexion.php';

		$idRent = $_POST['idRenta'];

		$horasUsadas;

		$sql = "SELECT TIMESTAMPDIFF(HOUR, CONCAT(date, ' ', hour_init), CONCAT(date, ' ', hour_end)) horas FROM rents WHERE id =$idRent";


		$result = $db->query($sql);

			if ($result = $db->query($sql)) {
				// $row['name']
			    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
			    	$horasUsadas = $row['horas'];
			    }
			} else {
			    echo '0 results';
			}

			if($horasUsadas == 0) {
				$horasUsadas = 1;
			}


		$costoMXN;
		$costoMoneda;
			

		$sql = 'SELECT H.cost, H.cost_coin FROM rents R JOIN gamers G ON R.gamers_id = G.id JOIN consoles C ON R.id_console = C.id JOIN platforms P ON C.id_platform = P.id JOIN hourCosts H ON H.id_plataforma = P.id WHERE R.id = $idRent';


		$result = $db->query($sql);

			if ($result = $db->query($sql)) {
				// $row['name']
			    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
			    	$costoMXN = $row['cost'];
			    	$costoMoneda = $row['cost_coin'];
			    }
			} else {
			    echo '0 results';
			}

		$totalMXN = $costoMXN * $horasUsadas;
		$totalMonedas = $costoMoneda * $horasUsadas;



		echo "<div class='modal fade' id='modalFinalizarRenta' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Finalizar renta</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        

		 <form>
  <div class='form-group'>
    <h6>Total en pesos mexicanos: $" . $totalMXN ."</h6>
    <h6>Total en monedas de gamer: ₡" . $totalMonedas ."</h6>
  </div>

  <div class='form-group'>
    <label for='tipoDePago'>Tipo de pago</label>
	    <select class='form-control' id='tipoDePago'>
	  <option value='1'>Pesos Mexicanos</option>

	  <option value='2'>Monedas de gamer</option>
	</select>
  </div>
  <button type='submit' class='btn btn-primary'>Pagar</button>
</form>
      </div>
    </div>
  </div>
</div>";
 ?>




