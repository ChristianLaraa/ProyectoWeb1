<?php
$host = 'localhost';
$dbname = 'login_crud';
$username = 'root';
$password = 'Lunapug09'; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
