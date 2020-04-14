<?php 
	require_once 'conexion.php';
	$sql = "SELECT P.id 'idP', HC.id, P.name, HC.cost, HC.cost_coin, HC.hour,HC.coins_per_hour FROM platforms P JOIN hourCosts HC ON HC.id_plataforma = P.id ";
	$result = $db->query($sql);

	if ($result) {
	    
		$i=0;
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	$_SESSION['id'] = $row['id'];
            $valor[$i] = $_SESSION['id'];
            echo "<div class='modal fade' id='modalActualizarCostoConsola".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            			  <div class='modal-dialog' role='document'>
            			    <div class='modal-content'>
            			      <div class='modal-header'>
            			        <h5 class='modal-title' id='exampleModalLabel'>Actualizar costo de hora</h5>
            			        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            			          <span aria-hidden='true'>&times;</span>
            			        </button>
            			      </div>
            			      <div class='modal-body'>
            
            			        <form id='miForm'>
            			  <div class='form-row'>
            			    <div class='form-group col-md-6'>
            			      <label for='costoHora'>Costo de la hora</label>
            			      <input type='number' class='form-control' id='costoHora".$valor[$i]."' value='".$row['cost']."'  name='costoHora' placeholder='Costo de la hora' min='0'>
            			    </div>
            			    <div class='form-group col-md-6'>
            			      <label for='cantidadHoras'>Cantidad de horas</label>
            			      <input type='number' class='form-control' id='cantidadHoras".$valor[$i]."' value='".$row['hour']."' name='cantidadHoras' placeholder='Cantidad de horas'>
            			    </div>
            			  </div>
            			  <div class='form-group'>
            			    <label for='monedasJugador'>Monedas al jugador</label>
            			    <input type='number' class='form-control' id='monedasJugador".$valor[$i]."' value='".$row['coins_per_hour']."' name='monedasJugador' placeholder='Monedas que recibe el jugador'>
            			  </div>
            			  <div class='form-group'>
            			    <label for='monedasCosto'>Costo en monedas</label>
            			    <input type='number' class='form-control' id='monedasCosto".$valor[$i]."' value='".$row['cost_coin']."' name='monedasCosto' placeholder='Costo de la hora en monedas'>
            			  </div>
            			    <div class='form-group col-md-4'>
            			      <label for='platforma'>Plataforma</label>
            			    </div>
            			    <select id='platforma".$valor[$i]."'  name='platforma' class='custom-select custom-select-sm'>
            					<option value='".$row['idP']."'>".$row['name']."</option>
            			      </select>
            			      </form>
            
            			          </div> 
            
            			          <div class='modal-footer'>
            			            <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancelar</button>
            			            <button type='button' class='btn btn-success' onclick='actualizarCostConsola(".$valor[$i].")' id='setDatos'>Actualizar</button>
            			          </div>
            
            			    </div>
            			  </div>
            			</div>";
	    	echo "
				 	<tr>
				 		<td width='150px'>" . $row['id'] . "</td>
				 		<td width='120px'>" . $row['name'] . "</td>
				 		<td width='120px'>" . $row['cost']. "</td>
				 		<td width='150px'>" . $row['cost_coin'] . "</td>
				 		<td>" . $row['hour'] . "</td>
				 		<td width='100px'>" . $row['coins_per_hour'] . "</td>

				 		<td><button type='button' data-toggle='modal' data-target='#modalActualizarCostoConsola".$valor[$i]."' name='t_ID' class='btn btn-success' onclick='btnActualizarCostConsola(".$valor[$i].")' >Editar</button></td>
				 		<td><button type='button' name='t_ID' class='btn btn-danger' onclick='btnEliminarConsole(".$valor[$i].")'>Eliminar</button></td>
				 	</tr>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>