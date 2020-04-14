<?php 
	require_once 'conexion.php';
	
	$sql = "SELECT * FROM videogames";
	$result = $db->query($sql);

	if ($result) {
		$i=0;
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	$_SESSION['id'] = $row['id'];
	    	$valor[$i] = $_SESSION['id'];
	    	echo "<div class='modal fade' id='actualizarGameT".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                  <div class='modal-content'>
                                        <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Video Juegos</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                          <span aria-hidden='true'>&times;</span>
                                          </button>
                                                                      </div>
                                                                      <div class='modal-body'>
                                                                          <form>
                                                                              <div class='form-group'>
                                                                                  <label for='recipient-name' class='col-form-label'>Titulo:</label>
                                                                                  <input value='".$row['title']."' type='text' class='form-control' id='tituloGamesActualizarT".$valor[$i]."'>
                                                                              </div>
                                                                              <div class='form-group'>
                                                                               <label for='file'>Seleccionar imagen</label>
                                                                                  <input value='".$row['image']."' id='imagenGameActualizarT".$valor[$i]."' type='file' name='file'>
                                                                                  <p class='help-block'>Solo archivos jpg, jpeg, png and gif con un tamaño máximo de 1 MB.</p>
                                                                              </div>
          
                                                                          </form>
                                                                      </div>
                                                                      <div class='modal-footer'>
                                                                          <button type='button' class='btn btn-danger' data-dismiss='modal' id='cancelar'>Cancelar</button>
                                                                          <button onclick='actualizarJuegoT(".$valor[$i].")' type='button' class='btn btn-success' id='guardarConsola'>Actualizar Registro</button>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>";
	        echo "<tr>
		        	<td>".$row["title"]."</td>
		        	<td width='60%'><p style='text-align: center; ''><img style='width: 30%; border-radius: 7px;' src='../../assets/img/videogames/".$row['image']."' alt='image' /> <p></td>
		        	<td>".
		        	"<div style='display:flex;'>".
			        	"<button id='btnActualizarT' data-toggle='modal' data-target='#actualizarGameT".$valor[$i]."' onclick='btnActualizarT(".$valor[$i].")' class='btn  btn-success' >"."<i class='fa fa-pencil'></i>". " Editar".
			        	"</button>".
			        	"<button id='btnEliminar' onclick='btnEliminar(".$valor[$i].")' class='btn  btn-danger btnEliminar' >"."<i class='fa fa-times'></i>". " Eliminar".
			        	"</button>".
			        "<div>".
		        	"</td>

	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>