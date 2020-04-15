 <?php
    require_once 'conexion.php';
    $timestamp = date('Y-m-d H:i:s');
    try{
        $sql = "INSERT INTO purchase (gamers_id, candyStore_id, total, payment, change_purchase, date_purchase) VALUES (?,?,?,?,?,?)";
        $result = $db->prepare($sql);
        $result->execute([
                $_POST['gamerV'],
                $_POST['productoV'],
                $_POST['costoV'],
                $_POST['pagasV'],
                $_POST['cambioV'],
                $timestamp
            ]);
        //$result->closeCursor();
    }catch(PDOException $e){
        echo $e;
    }


?> 