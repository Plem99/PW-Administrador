<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, title, date, hour, face_to_face, quantity_max_gamers, status FROM `tournaments`";
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {
	    
		// $row['name']
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "<table>
				 	<tr>
				 		<td width='150px'>" . $row['title'] . "</td>
				 		<td width='120px'>" . $row['date'] . "</td>
				 		<td width='120px'>" . $row['hour']. "</td>
				 		<td width='150px'>" . $row['face_to_face'] . "</td>
				 		<td>" . $row['quantity_max_gamers'] . "</td>
				 		<td width='100px'>" . $row['status'] . "</td>
				 		<td><button type='submit' name='t_ID' class='btn btn-outline-info' value='" . $row['id'] . "' data-toglle='modal' data-target='modalAllInfo'>Info</button></td>
				 	</tr>
				 </table>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>


 <?php 	
	require_once 'conexion.php';
	$sql = 'SELECT T.title, CONCAT(T.date, T.hour) Fecha, T.quantity_max_gamers, T.description, T.modality,T.face_to_face, T.status, R.positions, R.reward, Te.name, CONCAT(G.name, G.last_name) Nombre, G.username FROM tournaments T JOIN rewards R ON R.id_tournament = T.id JOIN participants P on P.tournaments_id = T.id JOIN teams Te on Te.id = R.teams_id JOIN gamers G on G.id = P.gamers_id WHERE R.teams_id = Te.id and P.teams_id = Te.id and P.gamers_id = G.id and T.id ='  . $row['id'];
	$result = $db->query($sql);

	if ($result = $db->query($sql)) {

		echo "
		
                        
			<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered' role='document'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h5 class='modal-title' id='exampleModalLongTitle'>".$result['T.title']."</h5>
			        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
			          <span aria-hidden='true'>&times;</span>
			        </button>
			      </div>
				    <div class='modal-body'>
				        <div class='row'>
							<div class='span6'>
							  <div class='mycontent-left'>
							  	<h6>Fecha:</h6>
							  </div>
							</div>
							<div class='span6'>
							  <div class='mycontent-right'>
							  	<p>".$result['Fecha']."</p>
							  </div>
							</div>
						</div>

						<table class='table'>
							<thead class='thead-dark'>
								<tr><th colspan='4'>Caracteristicas</th></tr>
							    <tr>
								    <th scope='col'>Modalidad</th>
								    <th scope='col'>Enfrentamiento</th>
								    <th scope='col'>Max. Jugadores</th>
								    <th scope='col'>Estatus</th>
							    </tr>
							</thead>
							<tbody>
							    <tr>
								    <td>".$result['T.modality']."</td>
								    <td>".$result['T.face_to_face']."</td>
								    <td>".$result['T.quantity_max_gamers']."</td>
								    <td>".$result['T.status']."</td>
							    </tr>
							   
						    </tbody>
						</table>

						
					</div>

			      </div>
			      <div class='modal-footer'>
			        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			      </div>
			    </div>
			  </div>
			</div>";

		// $row['name']
	    while($row2 = $result->fetch(PDO::FETCH_ASSOC)) {
	    	echo "<table class='table'>
				<thead class='thead-dark'>
					<tr><th colspan='4'>Ganadores</th></tr>
				    <tr>
					    <th scope='col'>Posición</th>
					    <th scope='col'>Equipo</th>
					    <th scope='col'>Jugador</th>
					    <th scope='col'>Nickname</th>
					    <th scope='col'>Premio</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
					    <td>".$row2['R.position']."</td>
					    <td>".$row2['Te.name']."</td>
					    <td>".$row2['Nombre']."</td>
					    <td>".$row2['G.username']."</td>
					    <td>".$row2['R.reward']."</td>
				    </tr>
				   
			    </tbody>
			</table>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();
 ?>