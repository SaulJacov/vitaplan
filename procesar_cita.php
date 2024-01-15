<?php
require 'conexion_database.php';
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$nutriologo = $_POST['nutriologo'];
$sql = "SELECT * FROM pacientes WHERE email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener el primer resultado (asumiendo que la CURP es única)
    $row = $result->fetch_assoc();
    // Almacenar los valores en variables
    $id = $row['id_p'];
    $email = $row['email'];
    $nombre = $row['nombre'];
    $apellidoP = $row['apellidoP'];
    $apellidoM = $row['apellidoM'];
    $telefono = $row['telefono'];
    $curp = $row['curp'];
}else {
    echo "No se encontro el paciente: $email";
}
$cita = "INSERT INTO citas (fecha, hora, nutriologo, id_p, curp, nombre_p, email_p) 
        VALUES ('$fecha', '$hora', '$nutriologo', '$id', '$curp', '$nombre.$apellidoP.$apellidoM', '$email')";
// Ejecutar la consulta
if ($conn->query($cita) === TRUE) {
    echo "La cita se ha guardado correctamente en la base de datos.";
} else {
    echo "Error: " . $cita . "<br>" . $conn->error;
}
$conn->close();
header("Location: agendar_citas.php");
die();

?>
