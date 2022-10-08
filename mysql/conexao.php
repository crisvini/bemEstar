<?php

$server = "localhost";
$user = "workou68_admin";
$password = "15C25v35l45l$";
$database = "workou68_web";

$mysqli = new mysqli($server, $user, $password, $database);
if ($mysqli->connect_errno)
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " .  $mysqli->connect_error;
