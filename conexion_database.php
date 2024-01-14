<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'vitaplan';

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}
?>