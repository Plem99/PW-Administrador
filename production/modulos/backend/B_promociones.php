<?php 
	require_once 'conexion.php';
	$sql = "SELECT id, name, description FROM promotions";
	$result = $db->query($sql);

	if ($result) {
	    
		$i=0;
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	$_SESSION['id'] = $row['id'];
            $valor[$i] = $_SESSION['id'];
            echo "<div class='modal fade' id='modalActualizarPromocion".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Agregar promoción</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                    <form >
              <div class='form-row'>
                <div class='form-group col-md-6'>
                  <label for='nombrePromo'>Nombre</label>
                  <input type='text' class='form-control' id='nombrePromo".$valor[$i]."' value='".$row['name']."' name='nombrePromo' placeholder='Nombre de promoción' min='0'>
                </div>
                <div class='form-group'>
                  <label for='descripcionPromo'  >Descripción</label>
                  <input type='text' class='form-control' id='descripcionPromo".$valor[$i]."' value='".$row['description']."' name='descripcionPromo' placeholder='Descripción de la promoción'>
                </div>
              </div>
            </form>
                </div>
            
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancelar</button>
                      <button type='button' onclick='actualizarPromociones(".$valor[$i].")' class='btn btn-success'>Actualizar</button>
                    </div>
            
                  </div>
              </div>
              </div>";
	    	echo "
				 	<tr>
				 		<td width='150px'>" . $row['id'] . "</td>
				 		<td width='200px'>" . $row['name'] . "</td>
				 		<td width='120px'>" . $row['description']. "</td>

				 		<td width='80px'>

							<center>

							<button type='button' name='t_ID' class='btn btn-success' data-toggle='modal' data-target='#modalActualizarPromocion".$valor[$i]."' onclick='btnActualizarPromociones(".$valor[$i].")'>Editar</button>
							</center>
				 		</td>
				 		<td width='80px'>

							<center>

							<button type='button' name='t_ID' class='btn btn-danger' onclick='btnEliminarPromociones(".$valor[$i].")' data-toglle='modal' data-target='modalAgregar' >Eliminar</button>
							</center>
				 		</td>
				 	</tr>";
	    }
	} else {
	    echo "0 results";
	}
	$result->closeCursor();

	
 ?>