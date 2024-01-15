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
$telefono = $_POST['telefono'];
$especialidad = $_POST['especialidad'];
$numeroIdentificacion = $_POST['numeroIdentificacion'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Crea la tabla con el nombre del nutriólogo si no existe
$tablaNombre = str_replace(" ", "_", $nombre); // Reemplaza espacios en el nombre por guiones bajos
$sqlCrearTabla = "CREATE TABLE IF NOT EXISTS $tablaNombre (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    apellidoP VARCHAR(255) NOT NULL,
    apellidoM VARCHAR(255) NOT NULL,
    nombre VARCHAR(255),
    telefono VARCHAR(20) NOT NULL,
    especialidad VARCHAR(255) NOT NULL,
    numero_identificacion VARCHAR(20) NOT NULL,
    curp VARCHAR(30),
    ID_paciente VARCHAR(50)
)";

$conn->query($sqlCrearTabla);

// Inserta los datos en la tabla correspondiente al nutriólogo
$sqlInsertarDatos = "INSERT INTO $tablaNombre (email, apellidoP, apellidoM, telefono, especialidad, numero_identificacion) 
VALUES ('$email', '$apellidoP', '$apellidoM', '$telefono', '$especialidad', '$numeroIdentificacion')";

if ($conn->query($sqlInsertarDatos) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sqlInsertarDatos . "<br>" . $conn->error;
}
// Consulta SQL para insertar datos en la tabla nutriologos
$sql = "INSERT INTO nutriologos (email, nombre, apellidoP, apellidoM, telefono, especialidad, numeroIdentificacion, usuario, contraseña) 
        VALUES ('$email', '$nombre', '$apellidoP', '$apellidoM', '$telefono', '$especialidad', '$numeroIdentificacion', '$usuario', '$contraseña')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente en la tabla nutriologos.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Cierra la conexión
$conn->close();

//link que envia a pagina de principal de VitaPlan
header("Location: index.html");
die();

/*
echo "Email: " . $email . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "ApellidoP: " . $apellidoP . "<br>";
echo "ApellidoM: " . $apellidoM . "<br>";
echo "Teléfono: " . $telefono . "<br>";
echo "Especialidad: " . $especialidad . "<br>";
echo "Número Identificación: " . $numeroIdentificacion . "<br>";
echo "Usuario: " . $usuario . "<br>";
echo "Contraseña: " . $contraseña . "<br>";
*/
?>
