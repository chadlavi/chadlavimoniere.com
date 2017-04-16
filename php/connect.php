<?php
$config = parse_ini_file("/root/config.ini",true); 
$stage = $config['stage'];
$mysqli = new mysqli("localhost", $config['username'], $config['password'], $config[$stage]['dbname']);

if ($mysqli->connect_errno) {
    echo "Connect failed: %s\n", $mysqli->connect_error;
    exit();
}
?>
