 <?php
    require_once 'conexion.php';

    try{
        $sql = "INSERT INTO accessories (name, cost) VALUES (?,?)";
        $result = $db->prepare($sql);
        $result->execute([
                $_POST['nombreAccesorio'],
                $_POST['costoAccesorio']
            ]);
        //$result->closeCursor();
    }catch(PDOException $e){
        echo $e;
    }

exit;
?> 