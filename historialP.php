<?php
require 'conexion_database.php';
// Inicia la sesión
session_start();
// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está autenticado, redirige al formulario de inicio de sesión
    header("Location: login.html");
    exit();
}
$paciente = $_SESSION['usuario_nombre'];
$id = $_SESSION['usuario_id'];
$sql = "SELECT * FROM pacientes WHERE id_p = '$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Las credenciales son válidas
    $row = $result->fetch_assoc();
    // Guarda la información del usuario en la sesión
    $_SESSION['usuario_id'] = $row['id_p'];
    $_SESSION['usuario_email'] = $row['email'];
    $_SESSION['usuario_nombre'] = $row['nombre'];
    $_SESSION['usuario_apellidoP'] = $row['apellidoP'];
    $_SESSION['usuario_apellidoM'] = $row['apellidoM'];
    $_SESSION['usuario_telefono'] = $row['telefono'];
    $_SESSION['usuario_curp'] = $row['curp'];
    $_SESSION['usuario_contraseña'] = $row['contraseña'];

} else {
    echo "tu historial medico aun no esta disponible.";
}
$conn->close();
echo $_SESSION['usuario_id'];
echo $_SESSION['usuario_email'];
?>