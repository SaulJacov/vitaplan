<?php
// Inicia la sesión
session_start();
// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está autenticado, redirige al formulario de inicio de sesión
    header("Location: login.html");
    exit();
}
    require 'conexion_database.php';
$nutriologo = $_SESSION['usuario_nombre'];

?>
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VitaPlan | Nutriólogo</title>
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
            <a class="navbar-brand" href="index.html"><img src="img/Logo.jpg" class="hover" style="height: 80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation" style="background: #FFFFFF">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHover">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item-2 active">
                        <a class="nav-link" href="precio.html">NUTRIOLOGO<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog2.html">BLOG</a>
                    </li>
                </ul>
                <div class="col">
                
                </div>
                <span>
                    <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item active">
                          <a class="nav-link" href="usuario.html"><img src="img/index/sesion.jpg" class="hover" style="height: 25px; width: 25px; margin-right: .5vw; text-align:center;"><?php echo $_SESSION['usuario_nombre'] ?></a>
                        </li>    
                    <li class="nav-item active">
                          <a class="nav-link" href="cerrar_sesion.php"><img src="img/index/sesion.jpg" class="hover" style="height: 25px; width: 25px; margin-right: .5vw; text-align:center;">cerrar sesion</a>
                        </li>
                    </ul>
                </span>
            </div>
        </nav>
        
        <center>
            <h1 style="font-size: 60px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-top: 7%;">NUTRIÓLOGO</h1><br>
            <div class="contenedor-seccion">
                <div class="columna">
					<h1>Pacientes</h1><br>
                    <div class="cuadro-con-texto dos">
						<div class="columna-agenda">
                            <?php
                            $consulta = "SELECT * FROM $nutriologo";
                            $resultado = $conn->query($consulta);
                            if ($resultado->num_rows > 0) {
                                echo '<table border="1">';
                                echo '<tr>';
                                echo '<th>Nombre</th>';
                                echo '<th>CURP</th>';
                                echo '<th>ID paciente</th>';
                                // Agrega más encabezados según las columnas que quieras mostrar
                                echo '</tr>';

                                while ($row = $resultado->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['nombre'] . '</td>';
                                    echo '<td>' . $row['curp'] . '</td>';
                                    echo '<td>' . $row['ID_paciente'] . '</td>';
                                    // Agrega más celdas según las columnas que quieras mostrar
                                    echo '</tr>';
                                }

                                echo '</table>';
                            } else {
                                echo 'No hay registros en la tabla "paciente".';
                            }
                            ?>
						</div>
                    </div>
			<BR> <BR>
					<a href="RegistroPN.php" class="btnL">REGISTRAR PACIENTE</a>
                </div>
                <div class="columna">
					<h1>Agenda</h1><br>
                    <div class="contenedor-agenda">
						<div class="evento">
							<div class="fecha">2024-01-10</div>
							<div class="descripcion">Cita a las 3:30 PM</div>
						</div>
						<div class="evento">
							<div class="fecha">2024-01-15</div>
							<div class="descripcion">Cita a las 3:30 PM</div>
						</div>
						<div class="evento">
							<div class="fecha">2024-01-15</div>
							<div class="descripcion">Cita a las 3:30 PM</div>
						</div>
						<div class="evento">
							<div class="fecha">2024-01-15</div>
							<div class="descripcion">Cita a las 3:30 PM</div>
						</div>

        <!-- Puedes agregar -->
					</div>
                </div>
            </div>
			<br><br><br>
            <div class="footer">
                <img src="img/index/Logo2.png" id="logof">
                <a href="https://www.instagram.com/" target="_blank" class="social_link" id="f1">
                    <i class="bx bxl-instagram social_icon"></i>
                </a>
                <a href="https://es-la.facebook.com/" target="_blank" class="social_link">
                    <i class="bx bxl-facebook-circle social_icon"></i>
                </a>
                <a href="https://twitter.com/?lang=es" target="_blank" class="social_link">
                    <i class="bx bxl-twitter social_icon"></i>
                </a>
                <a href="https://www.tiktok.com/es/" target="_blank" class="social_link">
                    <i class="bx bxl-tiktok social_icon"></i>
                </a>
                <br>
                <center>
                <h5>VitaPlan - Transformando la Nutrición y la Salud. © 2023 Todos los derechos reservados. <a href="aviso.html" class="linkf">Aviso de privacidad</a> | <a href="terminos.html" class="linkf">Términos de Servicio</a>  | <a href="contacto.html" class="linkf">Contáctanos</a></h5>
                <br>
            </center><br><br>
        </div>
        
        <script src="js/JQuery.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </body>
</html>
