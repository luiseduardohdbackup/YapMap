<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$session_id = $_POST['session_id'];
$connection_id = $_POST['connection_id'];
$remote_ip = @$REMOTE_ADDR;

$params = array(
    'session_id' => $session_id,
    'connection_id' => $connection_id,
    'remote_ip' => $remote_ip
	);

$postdata = http_build_query($params);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);


$context  = stream_context_create($opts);
$result = file_get_contents('http://sip101-lax.tokbox.com:5001/maps_demo/register_connection', false, $context);
print $result;

?>
