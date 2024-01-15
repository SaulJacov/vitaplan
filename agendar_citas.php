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
            <a class="navbar-brand" href="indexN.php"><img src="img/Logo.jpg" class="hover" style="height: 80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation" style="background: #FFFFFF">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHover">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexN.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog2.html">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="precio.php">MEMBRESÍA</a>
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
            <h1 style="font-size: 60px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-top: 7%;">AGENDAR CITAS</h1><br>
            <div class="contenedor-seccion">
			<div class="columna columna-izquierda">
                <form action="procesar_registro_nutriologo.php" method="post">
					<label for="ema" style="color: black; font-size: 20px">Email</label>
					<span id="sp" class="required">*</span>
					<input type="text" id="ema" name="email" required placeholder="Escribe tu email">
					<br>
					<label for="nombre2" style="color: black; font-size: 20px">Nombre(s)</label>
					<span style="margin-right: 45%;" class="required">*</span>
					<input type="text" id="nombre2" name="nombre" required placeholder="Escribe tu(s) nombre(s)">
					<br>
					<label for="apP" style="color: black; font-size: 20px">Apellido Paterno</label>
					<span style="margin-right: 35%;" class="required">*</span>
					<input type="text" id="apP" name="apellidoP" required placeholder="Escribe tu apellido paterno">
					<br>
					<label for="apM" style="color: black; font-size: 20px">Apellido Materno</label>
					<span style="margin-right: 35%;" class="required">*</span>
					<input type="text" id="apM" name="apellidoM" required placeholder="Escribe tu apellido materno">
					<br>
					<label for="tel" style="color: black; font-size: 20px">Teléfono celular</label>
					<span style="margin-right: 35%;" class="required">*</span>
					<input type="text" id="tel" name="telefono" required placeholder="Escribe tu teléfono celular">
					<br>
					<label for="espe" style="color: black; font-size: 20px">Especialidad</label>
					<span style="margin-right: 40%;" class="required">*</span>
					<input type="text" id="espe" name="especialidad" required placeholder="Escribe tu especialidad">
			</div>
			<div class="columna columna-derecha">
				
					<label for="num" style="color: black; font-size: 20px">Número de identificación</label>
					<span style="margin-right: 25%;" class="required">*</span>
					<input type="text" id="num" name="numeroIdentificacion" required placeholder="Escribe tu numero de identificación">
					<br>
					<label style="color: black; font-size: 20px">Horario</label>	
					<span style="margin-right: 50%;" class="required">*</span><br>
					<br>
					<label for="usu" style="color: black; font-size: 20px">Usuario</label>
					<span style="margin-right: 50%;" class="required">*</span>
					<input type="text" id="usu" name="usuario" required placeholder="Escribe tu nombre de usuario">
					<br>
					<label for="cont" style="color: black; font-size: 20px">Contraseña</label>
					<span style="margin-right: 45%;" class="required">*</span>
					<input type="text" id="cont" name="contraseña" required placeholder="Escribe tu contraseña">
					<br>
					<label for="cont2" style="color: black; font-size: 20px">Confirmar Cotraseña</label>
					<span style="margin-right: 30%;" class="required">*</span>
					<input type="text" id="cont2" name="contraseña2" required placeholder="Escribe tu contraseña">
					<br>
					<button type="submit" class="boton" onclick="captura()">REGISTRARSE</button><br><br>
					<label id="aste">*</label><label id="in" style="color: black; font-size: 15px"> los campos son obligatorios</label>
				</form>
			</div>
				
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
