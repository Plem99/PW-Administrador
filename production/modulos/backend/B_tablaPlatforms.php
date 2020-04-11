<?php
    //Consultadondo los alimentos registrados
    require_once 'conexion.php';
    $sql = "SELECT * FROM platforms";
    $result = $db->query($sql);
    if ($result) {
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    echo "<div class='col-md-55'>
                    <div class='thumbnail'>
                      <div class='image view view-first'>
                        <img style='width: 100%; display: block; border-radius: 7px;' src='././images/consoles/".$row['image']."' alt='image' />
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
    } else {
        echo "<h2 style='text-align: center; margin-top: 80px; font-size:24px'>No hay plataformas registradas</h2>";
   }
   $result->closeCursor();
?>