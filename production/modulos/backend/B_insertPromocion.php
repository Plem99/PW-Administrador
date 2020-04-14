<?php
    require_once 'conexion.php';

    try{
        $sql = "INSERT INTO promotions (name, description) VALUES (?,?)";
        $result = $db->prepare($sql);
        $result->execute([
                $_POST['nombrePromo'],
                $_POST['descripcionPromo']
            ]);
        //$result->closeCursor();
    }catch(PDOException $e){
        echo $e;
    }

exit;
?> 