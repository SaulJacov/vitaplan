<?php
// Configura tus credenciales de la base de datos
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'vitaplan';

// Conecta a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recoge los datos del formulario
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$curp = $_POST['curp'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contraseña'];


// Inserta los datos en la tabla "pacientes"
$sql = "INSERT INTO pacientes (email, nombre, apellidoP, apellidoM, telefono, curp, contraseña) VALUES ('$email', '$nombre', '$apellidoP', '$apellidoM', '$telefono', '$curp', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$conn->close();
//link que envia a pagina de principal de VitaPlan
header("Location: index.php");
die();
?>
