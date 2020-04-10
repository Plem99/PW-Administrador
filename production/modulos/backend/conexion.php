<?php
//if(!isset($_SESSION)) {
//    session_start();
//}
$db = new mysqli('ameb.tech',  'revoluxionAdmin', 'revoluxionPass','revoluxion_DB');
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
mysqli_query($db,"SET NAMES 'utf8'");
