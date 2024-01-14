<?php
$curp = $_POST['curp'];
$nutriologo = $_POST['nutriologo'];

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'vitaplan';

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM pacientes WHERE curp = '$curp'";

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
    echo "No se encontraron resultados para la CURP: $curp";
}
$paciente = "INSERT INTO $nutriologo (email, apellidoP, apellidoM, nombre, telefono, curp, ID_paciente) VALUES ('$email', '$apellidoP', '$apellidoM', '$nombre', '$telefono', '$curp', '$id')";
// Ejecutar la consulta
if ($conn->query($paciente) === TRUE) {
    echo "Los datos se han insertado correctamente en la tabla nutriologos.";
} else {
    echo "Error: " . $paciente . "<br>" . $conn->error;
}
$conn->close();

//link que envia a pagina de principal de VitaPlan
header("Location: nutriologo.php");
die();

/*echo "ApellidoP: " . $apaterno . "<br>";
echo "ApellidoM: " . $amaterno . "<br>";
echo "ApellidoM: " . $curp . "<br>";
echo "ApellidoM: " . $nutriologo . "<br>";
*/
?>