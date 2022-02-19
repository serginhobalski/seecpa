<?php

$host = "localhost";
$db = "contato_seec";
$user = "root";
$password = "";


$mysqli = new mysqli(
    $host,
    $user,
    $password,
    $db
);
if ($mysqli->connect_error) {
    die("Falha na conexão com o banco de dados");
}
