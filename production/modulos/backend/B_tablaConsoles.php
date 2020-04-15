<?php
    //Consultadondo los alimentos registrados
    require_once 'conexion.php';
    $sql = "SELECT p.id 'idP', c.id, c.number_console 'numConsole', p.name, p.image, c.serial_console FROM consoles as c INNER JOIN platforms as p ON c.id_platform = p.id";
    $result = $db->query($sql);
    if ($result) {
      $i=0;
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                  $_SESSION['id'] = $row['id'];
                  $valor[$i] = $_SESSION['id'];
                  echo "
                  <div class='modal fade' id='juegoconsole".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-lg' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 class='modal-title' id='exampleModalLabel'>Videojuegos en consola ".$row['name']."-".$row['numConsole']."</h5>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>
                        <div class='modal-body'>
                  
                          <form id='miForm'>
                  
                    <div class='form-row'>
                      <div class='form-group col-md-4'>
                        <label for='costoHora'>Lista de todos los Videojuegos</label>

                        <select id='videogames".$valor[$i]."' name='videogames' class='custom-select form-control custom-select-sm'>

                        </select>

                        

                      </div>
                      <div class='form-group col-md-1'>
                        <label for='cantidadHoras'></label>
                        
                        <a id='btnAgregarJuegp' class='btn form-control btn-success btnAgregarJuegp' onclick='listaVideogamesTableInsert(".$valor[$i].");'><i class='fa fa-plus'></i></a>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class='form-row'>
                      <div class='x_panel'>
                      <div class='x_title'>
                          <h2>Lista</h2>
                  
                          <div class='clearfix'></div>
                      </div>
                      <div class='x_content'>
                          <div class='row'>
                              <div class='col-sm-12'>
                                  <div class='card-box table-responsive'>
                                      <p class='text-muted font-13 m-b-30'>
                                          Todos los Videojuegos en consola ".$row['serial_console']."
                                      </p>
                                      <table id='datatable-buttons' class='table table-striped table-bordered' >
                                          <thead>
                                              <tr>
                                                  <th>Nombre</th>
                                                  <th>Imagen</th>
                                                  <th>Accion</th>
                                              </tr>
                                          </thead>
                  
                                          <tbody id='tablaVideogamesConsole".$valor[$i]."'>
                                              
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                    </div>
                    
                      
                        </form>
                  
                            </div> 
                  
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-outline-info' data-dismiss='modal'>Cerrar</button>
                            </div>
                  
                      </div>
                    </div>
                  </div>";
                  echo "
                  <div class='modal fade' id='modalActualizarConsola".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
                      <div class='modal-dialog' role='document'>
                          <div class='modal-content'>
                              <div class='modal-header'>
                                  <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Consola</h5>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                  </button>
                              </div>
                              <div class='modal-body'>
                  
                                  <form>
                                      <div class='form-group'>
                                          <label for='recipient-name' class='col-form-label'>Numero de consola:</label>
                                          <input type='number' class='form-control' id='numConsola".$valor[$i]."' value='".$row['numConsole']."'>
                                      </div>
                                      <div class='form-group'>
                                          <label for='message-text' class='col-form-label'>Serial</label>
                                          <input type='text' class='form-control' id='serial".$valor[$i]."' value='".$row['serial_console']."'>
                                      </div>
                                      <div class='form-group'>
                                          <label for='inputState'>Plataforma</label>
                                          <select id='plataforma".$valor[$i]."' class='form-control'>
                                              <option value='".$row['idP']."'>".$row['name']."</option>
                                          </select>
                                      </div>
                                  </form>
                  
                              </div>
                              <div class='modal-footer'>
                                  <button type='button' class='btn btn-danger' data-dismiss='modal' id='cancelarConsola'>Cancelar</button>
                                  <button type='button' onclick='actualizarConsola(".$valor[$i].")' class='btn btn-success' id='guardarConsola'>Actualizar Registro</button>
                              </div>
                          </div>
                      </div>
                  </div>";
                    echo "<div class='col-md-55'>
                    <div class='thumbnail'>
                      <div class='image view view-first'>
                        <img style='width: 100%; display: block; border-radius: 7px;' src='../../assets/img/platforms/".$row['image']."' alt='image' />
                        <div class='mask'>
                          <p>
                            ".$row['name']." - ".$row['numConsole']."
                          </p>
                          <div class='tools tools-bottom'>
                          <button id='btnVerV' data-toggle='modal' data-target='#modalVerConsola".$valor[$i]."' onclick='btnVerConsola(".$valor[$i].");listaVideogames(".$valor[$i].");listaVideogamesTable(".$valor[$i].");'><i class='fa fa-check-square'></i></button>
                            <button id='btnActualizarV' data-toggle='modal' data-target='#modalActualizarConsola".$valor[$i]."' onclick='btnActualizarConsola(".$valor[$i].")'><i class='fa fa-pencil'></i></button>
                            <button id='btnEliminarConsola' href='' onclick='btnEliminarConsola(".$valor[$i].")'><i class='fa fa-times'></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>";
                }
    } else {
        echo "<h2 style='text-align: center; margin-top: 80px; font-size:24px'>No hay consolas registradas</h2>";
   }
   $result->closeCursor();
?>