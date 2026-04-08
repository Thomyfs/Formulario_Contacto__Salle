<?php
$host = "sql107.infinityfree.com";
$user = "if0_41441730";
$password = "sCUhf1vlRzvs";
$database = "if0_41441730_contactos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>