<?php
    //Consultadondo los alimentos registrados
    require_once 'conexion.php';
    $sql = "SELECT c.id, c.serial, c.id_platform, p.name, p.image FROM consoles as c INNER JOIN platforms as p ON c.id_platform = p.id";
    $result = $db->query($sql);
    if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    echo "<div class='col-md-55'>
                    <div class='thumbnail'>
                      <div class='image view view-first'>
                        <img style='width: 100%; display: block; border-radius: 7px;' src='././images/consoles/".$row[4].".jpg' alt='image' />
                        <div class='mask'>
                          <p>
                            ".$row['name']."
                          </p>
                          <div class='tools tools-bottom'>
                            <a href='../production/V_console.php?var=".$row['id']."'><i class='fa fa-pencil'></i></a>
                            <a href='modulos/backend/B_consoleDelete.php?c.id=".$row['id']."'><i class='fa fa-times'></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>";
                }
                //Liberando memoria
                mysqli_free_result($result);
    } else {
        echo "<h2 style='text-align: center; margin-top: 80px; font-size:24px'>No hay dietas registradas</h2>";
   }
?>