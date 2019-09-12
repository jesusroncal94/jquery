<?php
$server = 'localhost';
$user = 'root';
$password = 'root';
$db = 'ubigeo';

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error) {
    die("Falló conexión: ".$conn->connect_error);
}

?>