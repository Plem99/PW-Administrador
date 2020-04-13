<?php
    require_once 'conexion.php';

    $costoHora = $_POST['costoMXN'];
    $cantidadHoras = $_POST['horas'];
    $monedasJugador = $_POST['coinsplayer'];
    $monedasCosto = $_POST['costCoin'];
    $plataformaV = $_POST['plataformaValor'];

    // echo $costoHora;
    // echo $plataforma;
    
    $sql = "INSERT INTO hourCosts (cost, hour, coins_per_hour, cost_coin, id_plataforma) VALUES (:cost, :hour, :coins_per_hour, :cost_coin, :id_plataforma);";

    $stmt = $db->prepare($sql);

    $stmt->execute(['cost' => $costoHora, 'hour' => $cantidadHoras, 'coins_per_hour' => $monedasJugador, 'cost_coin' => $monedasCosto, 'id_plataforma' => $plataformaV]);


?> 