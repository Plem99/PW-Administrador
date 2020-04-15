<?php
    require_once 'conexion.php';

    try{
        $sql = "INSERT INTO consoleVideogames (consoles_id, videogames_id) VALUES (?,?)";
        $result = $db->prepare($sql);
        $result->execute([
                $_POST['idConsola'],
                $_POST['idVideogame']
            ]);
        
    }catch(PDOException $e){
        echo $e;
    }

?> 