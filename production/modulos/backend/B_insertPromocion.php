<?php
    require_once 'conexion.php';

    $nombrePromo = $_POST['nombrePromo'];
    $descripcionPromo = $_POST['descripcionPromo'];

    $sql = "INSERT INTO promotions (name, description) VALUES (:name, :description);";

    $stmt = $db->prepare($sql);

    $stmt->execute(['name' => $nombrePromo, 'description' => $descripcionPromo]);

    header("Status: 301 Moved Permanently");
    header("Location: ../../V_costs.php");
exit;
?> 