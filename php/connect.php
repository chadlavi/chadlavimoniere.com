<?php
$config = parse_ini_file('../config.ini'); 

$mysqli = new mysqli("localhost", $config['username'], $config['password'], $config['dbname']);

// check connection 
if ($mysqli->connect_errno) {
    echo "Connect failed: %s\n", $mysqli->connect_error;
    exit();
}
?>
