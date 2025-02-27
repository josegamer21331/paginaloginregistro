<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Contraseña incorrecta. <a href='index.html'>Intentar de nuevo</a>";
        }
    } else {
        echo "Usuario no encontrado. <a href='index.html'>Registrarse</a>";
    }
    $conn->close();
}
?>
