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
?>
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VitaPlan | Historial Médico</title>
        <link rel="icon" href="img/LogoP.jpg" type="image/jpg" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="css/slider.css" rel="stylesheet">
    </head>
    <body style="background-color: #FFFFFF">
        <nav class="navbar navbar-expand-md navbar-light bg-light navbar-hover fixed-top">
            <a class="navbar-brand" href="indexP.php"><img src="img/Logo.jpg" class="hover" style="height: 80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation" style="background: #FFFFFF">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHover">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexP.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactoP.php">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog2P.php">BLOG</a>
                    </li>
                </ul>
                <div class="col">
                
                </div>
                <span>
                    <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item active">
                          <a class="nav-link" href="nutriologo.php"><img src="img/index/sesion.jpg" class="hover" style="height: 25px; width: 25px; margin-right: .5vw; text-align:center;"><?php echo $_SESSION['usuario_nombre'] ?></a>
                        </li>    
                    <li class="nav-item active">
                          <a class="nav-link" href="cerrar_sesion.php"><img src="img/index/sesion.jpg" class="hover" style="height: 25px; width: 25px; margin-right: .5vw; text-align:center;">CERRAR SESIÓN</a>
                        </li>
                    </ul>
                </span>
            </div>
        </nav>
        
        <center>
            <h1 style="font-size: 60px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-top: 7%;">CONSULTAS</h1><br>
            <div class="contenedor-seccion">
                <div class="columnaC">
                    <img style="height: 12vw;" src="img/datosPaciente/im3.jpg">
                </div>    
                <div class="columna">
                    <div class="cuadro-con-texto dos">
                        <div class="columna-agenda">
                            <?php
                            $nutriologo = $_SESSION['usuario_nombre'];
                            $id = $_SESSION['usuario_id'];
                            $email = $_SESSION['usuario_email'];
                            $sql = "SELECT * FROM citas WHERE nutriologo = '$nutriologo'";

                            $resultado = $conn->query($sql);
                            if ($resultado->num_rows > 0) {
                                echo '<table border="1">';
                                echo '<tr>';
                                echo '<th>id cita</th>';
                                echo '<th>Fecha</th>';
                                echo '<th>Hora</th>';
                                echo '<th>id de paciente</th>';
                                echo '<th>Nombre del paciente</th>';
                                echo '<th>email del paciente</th>';
                                // Agrega más encabezados según las columnas que quieras mostrar
                                echo '</tr>';

                                while ($row = $resultado->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['id_cita'] . '</td>';
                                    echo '<td>' . $row['fecha'] . '</td>';
                                    echo '<td>' . $row['hora'] . '</td>';
                                    echo '<td>' . $row['id_p'] . '</td>';
                                    echo '<td>' . $row['nombre_p'] . '</td>';
                                    echo '<td>' . $row['email_p'] . '</td>';
                                    // Agrega más celdas según las columnas que quieras mostrar
                                    echo '</tr>';
                                }

                                echo '</table>';
                            } else {
                                echo 'No hay registros en la tabla "paciente".';
                            }
                            $conn->close();
                            //echo $_SESSION['usuario_id'];
                            //echo $_SESSION['usuario_email'];
                            ?>
                        </div>
                        <BR> <BR>
                    </div>
                <BR> <BR>
                </div>
            </div>
            <br><br><br><br><br><br>
        <script src="js/JQuery.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </body>
</html>