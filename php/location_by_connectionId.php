<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$session_id = $_POST['session_id'];
$connection_id = $_POST['connection_id'];


$url = "http://sip101-lax.tokbox.com:5001/maps_demo/session/{$session_id}/connection/{$connection_id}";


$file = implode("",file($url));

print($file);



?>
