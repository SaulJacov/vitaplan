<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está autenticado, redirige al formulario de inicio de sesión
    header("Location: selec_login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VitaPlan | Inicio</title>
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
                        <a class="nav-link" href="contactoN.php">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog2N.php">BLOG</a>
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
                          <a class="nav-link" href="nutriologo.php"><img src="img/index/sesion.jpg" class="hover" style="height: 25px; width: 25px; margin-right: .5vw; text-align:center;"><?php echo $_SESSION['usuario_nombre'] ?></a>
                        </li>    
                    <li class="nav-item active">
                          <a class="nav-link" href="cerrar_sesion.php"><img src="img/index/sesion.jpg" class="hover" style="height: 25px; width: 25px; margin-right: .5vw; text-align:center;">CERRAR SESIÓN</a>
                        </li>
                    </ul>
                </span>
            </div>
        </nav>
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/index/2.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-2" style="margin-top: 8vw; font-family: TypoldCondensed, Helvetica, Arial, sans-serif; color: white">VITAPLAN</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/index/3.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/index/1.jpg" alt="">
                </div>
            </div>
        </div>
        <br><br>
        
        <center>
            <div class="contenedor-seccion">
                <div class="columna columna-izquierda">
                    <h1 style="font-size: 100px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">VITAPLAN</h1><br><br>
                    <h6 style="text-align: left; color: black; font-size: 25px;">"Transformando vidas a través de la nutrición: donde la
                    tecnología se encuentra con la salud, y cada elección
                    alimentaria es un paso hacia el bienestar total."</h6><br>
                    <div class="contenedor-seccion">
                        <div class="columna columna-derecha">
                            <a href="conoceN.php" class="boton">CONOCE MÁS</a>
                        </div> 
                    </div>               
                </div>
                <div class="columna columna-derecha">
                    <img src="img/index/medico.png">
                </div>
            </div>
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