<?php 

  require_once 'conexion.php';

  $idTo = $_POST['IDTorneo'];

  $sql = "SELECT positions, reward FROM rewards R JOIN tournaments T ON R.id_tournament = T.id WHERE T.id = " . $idTo;
  $result = $db->query($sql);

  if ($result = $db->query($sql)) {
    // $row['name']
      while($row = $result->fetch(PDO::FETCH_ASSOC)) {

        echo "
          <div class='form-group col-md-4'>
        <h6>".$row['positions'] ." lugar: ". $row['reward'] ."</h6>
        </div>"; 
        // fin de echo
      }

  } else {
      echo "0 results";
  }
  $result->closeCursor();

  
?>
         

