<?php
//if(!isset($_SESSION)) {
//    session_start();
//}
$db = new mysqli('127.0.0.1:33066',  'root', '','pw_proyectofinal');
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
mysqli_query($db,"SET NAMES 'utf8'");