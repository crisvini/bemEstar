<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "bemEstar";

$mysqli = new mysqli($server, $user, $password, $database);
if ($mysqli->connect_errno)
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " .  $mysqli->connect_error;
