<?php
$config = parse_ini_file(realpath('/root/config.ini')); 

$mysqli = new mysqli("localhost", $config['username'], $config['password'], $config['dbname']);

if ($mysqli->connect_errno) {
    echo "Connect failed: %s\n", $mysqli->connect_error;
    exit();
}
?>
