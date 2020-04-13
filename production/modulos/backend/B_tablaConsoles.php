<?php
    //Consultadondo los alimentos registrados
    require_once 'conexion.php';
    $sql = "SELECT c.id, c.number_console 'numConsole', p.name, p.image FROM consoles as c INNER JOIN platforms as p ON c.id_platform = p.id";
    $result = $db->query($sql);
    if ($result) {
      $i=0;
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                  $_SESSION['id'] = $row['id'];
                  $valor[$i] = $_SESSION['id'];
                    echo "<div class='col-md-55'>
                    <div class='thumbnail'>
                      <div class='image view view-first'>
                        <img style='width: 100%; display: block; border-radius: 7px;' src='../../assets/img/platforms/".$row['image']."' alt='image' />
                        <div class='mask'>
                          <p>
                            ".$row['name']." - ".$row['numConsole']."
                          </p>
                          <div class='tools tools-bottom'>
                            <button id='btnActualizarV' data-toggle='modal' data-target='#actualizarGame".$valor[$i]."' onclick='btnActualizarConsola(".$valor[$i].")'><i class='fa fa-pencil'></i></button>
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