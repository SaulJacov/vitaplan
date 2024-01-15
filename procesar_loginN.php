<?php
session_start();
require 'conexion_database.php';
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$sql = "SELECT * FROM nutriologos WHERE email = '$email' AND contraseña = '$contraseña'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Las credenciales son válidas
    $row = $result->fetch_assoc();

    // Guarda la información del usuario en la sesión
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['usuario_email'] = $row['email'];
    $_SESSION['usuario_nombre'] = $row['nombre'];

    // Redirecciona al usuario a la página de bienvenida
    header("Location: indexN.php");
} else {
    // Las credenciales no son válidas
    echo "Inicio de sesión fallido. Verifica tu email y contraseña.";
}
$conn->close();
?>