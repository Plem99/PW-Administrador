<?php 

  require_once 'conexion.php';

  $idTo = $_POST['IDTorneo'];

  $sqlG = "SELECT G.username, G.id FROM tournaments T JOIN participants P ON P.tournaments_id = T.id JOIN gamers G ON P.gamers_id = G.id   WHERE T.id = $idTo";
  $result = $db->query($sqlG);

  if ($result = $db->query($sqlG)) {
      
    // $row['name']
      while($row = $result->fetch(PDO::FETCH_ASSOC)) {



        echo "<option value='". $row['id'] ."'>".$row['username']."</option>";
      }

  } else {
      echo "0 results";
  }
  $result->closeCursor();

      
  
?>


          
          
           