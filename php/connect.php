<?php
$config = parse_ini_file(realpath('/root/config.ini'),true); 
$stage = $config['stage'];
$mysqli = new mysqli("localhost", $config[$stage]['username'], $config[$stage]['password'], $config[$stage]['dbname']);

if ($mysqli->connect_errno) {
    echo "Connect failed: %s\n", $mysqli->connect_error;
    exit();
}
?>
