<?php
$servername = "localhost";
$username = "root"; // Usuario de XAMPP
$password = ""; // Contraseña vacía por defecto en XAMPP
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
