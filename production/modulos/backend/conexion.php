<?php
try{
    $db = new PDO("mysql:host=ameb.tech;dbname=revoluxion_DB", "revoluxionAdmin", "revoluxionPass");
}catch (PDOException $e){
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
