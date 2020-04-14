<?php
    require_once 'conexion.php';

    $idConsola = $_POST['idConsola'];
    $idGamer = $_POST['idGamer'];

    $todayh = getdate();

    $d = $todayh[mday];
     $m = $todayh[mon];
     $y = $todayh[year];

     $timeNow = date("H:i:s");

    $idCosto;

    $formatedDate = $y. "-" . $m. "-" . $d;



// Para obtener el ID del costo

    $sqlID = "Select hourCosts.id FROM platforms JOIN hourCosts ON platforms.id = hourCosts.id_plataforma WHERE platforms.id = $idConsola";



    $result = $db->query($sqlID);

    if ($result = $db->query($sqlID)) {
        
        // $row['name']
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $idCosto = $row['id'];
        }
    } else {
        // echo "0 results";
    }

    //echo $idCosto;

// Para insertar
    
    $sql = "INSERT INTO rents (date, hour_init, id_console, gamers_id, hourCosts_id) VALUES (:date, :hour_init, :id_console, :gamers_id, :hourCosts_id)";

    $stmt = $db->prepare($sql);

    $stmt->execute(['date' => $formatedDate, 'hour_init' => $timeNow, 'id_console' => $idConsola, 'gamers_id' => $idGamer, 'hourCosts_id' => $idCosto]);


?>  