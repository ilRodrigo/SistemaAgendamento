<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "sistema_consultas";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
