<?php
    require_once 'conexion.php';

    $sql = "SELECT * FROM videogames";
    $result = $db->query($sql);

    if ($result) {
      $i=0;
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                  $_SESSION['id'] = $row['id'];
                  $valor[$i] = $_SESSION['id'];
                  echo "<div class='modal fade' id='actualizarGame".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
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
                                                                                  <input value='".$row['title']."' type='text' class='form-control' id='tituloGamesActualizar".$valor[$i]."'>
                                                                              </div>
                                                                              <div class='form-group'>
                                                                               <label for='file'>Seleccionar imagen</label>
                                                                                  <input value='".$row['image']."' id='imagenGameActualizar".$valor[$i]."' type='file' name='file'>
                                                                                  <p class='help-block'>Solo archivos jpg, jpeg, png and gif con un tamaño máximo de 1 MB.</p>
                                                                              </div>
          
                                                                          </form>
                                                                      </div>
                                                                      <div class='modal-footer'>
                                                                          <button type='button' class='btn btn-danger' data-dismiss='modal' id='cancelar'>Cancelar</button>
                                                                          <button onclick='actualizarJuego(".$valor[$i].")' type='button' class='btn btn-success' id='guardarConsola'>Actualizar Registro</button>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>";
                    echo "<div class='col-md-55'>
                    <div class='thumbnail'>
                      <div class='image view view-first'>
                        <img style='width: 100%; display: block; border-radius: 7px;' src='../../assets/img/videogames/".$row['image']."' alt='image' />
                        <div class='mask'>
                          <p>
                            ".$row['title']."
                          </p>
                          <div class='tools tools-bottom'>
                            <button id='btnActualizarV' data-toggle='modal' data-target='#actualizarGame".$valor[$i]."' onclick='btnActualizar(".$valor[$i].")'><i class='fa fa-pencil'></i></button>
                            <button id='btnEliminar' href='' onclick='btnEliminar(".$valor[$i].")'><i class='fa fa-times'></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>";
                }
    } else {
        echo "<h2 style='text-align: center; margin-top: 80px; font-size:24px'>No hay video juegos registrados</h2>";
   }
   $result->closeCursor();
?>