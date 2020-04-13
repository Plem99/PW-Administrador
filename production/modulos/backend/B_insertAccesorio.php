 <?php
    require_once 'conexion.php';

    $nombreAccesorio = $_POST['nombreAccesorio'];
    $costoAccesorio = $_POST['costoAccesorio'];

    echo "$nombreAccesorio" . " " . "$costoAccesorio";


    $sql = "INSERT INTO accessories (name, cost) VALUES (:name, :costo);";

    $stmt = $db->prepare($sql);

    $stmt->execute(['name' => $nombreAccesorio, 'costo' => $costoAccesorio]);


    header("Status: 301 Moved Permanently");
    header("Location: ../../V_costs.php");
exit;
?> 