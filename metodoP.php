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
        <title>VitaPlan | Método de Pago</title>
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
                        <a class="nav-link" href="precio.php">MEMBRESÍA<span class="sr-only">(current)</span></a>
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
            <h1 style="font-size: 60px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-top: 7%;">MÉTODO DE PAGO</h1><br>
            <h6 style="color: black; font-size: 25px;">Seleccione su método de pago</h6>
            <div class="contenedor-seccion">
                <div class="columna">
                    <div class="cuadro-con-texto uno">
						<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Todos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TIPO DE MEMBRESÍA
                        </a>
                        <ul class="dropdown-menu bg-light" style="font-size: 10px" id="navbarHover">
                            <li><a class="dropdown-item nav-link" href="propiedades.html">VitaPlan Estándar<bold>&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
                            <li><a class="dropdown-item nav-link" href="cotizacion.html">VitaPlan Premium<bold>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
                        </ul>
                    </li>
					<img style="height: 12vw;" src="img/precio/1.png">
                    </div>
                </div>
                <div class="columna">
                    <div class="cuadro-con-texto dos">
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Todos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TIPO DE PAGO
                        </a>
                        <ul class="dropdown-menu bg-light" style="font-size: 10px" id="navbarHover">
                            <li><a class="dropdown-item nav-link" href="propiedades.html">Mensual<bold>&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
                            <li><a class="dropdown-item nav-link" href="cotizacion.html">Anual<bold>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
                        </ul>
                    </li>
					<img style="height: 12vw;" src="img/precio/2.png">
                    </div>                       
                </div>
                <div class="columna">
                    <div class="cuadro-con-texto tres">
					
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Todos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MÉTODO DE PAGO
                        </a>
                        <ul class="dropdown-menu bg-light" style="font-size: 10px" id="navbarHover">
                            <li><a class="dropdown-item nav-link" href="propiedades.html">Paypal<bold>&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
                            <li><a class="dropdown-item nav-link" href="cotizacion.html">Tarjeta de crédito<bold>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
							 <li><a class="dropdown-item nav-link" href="propiedades.html">Tarjeta de débito<bold>&nbsp;&nbsp;&nbsp;&nbsp;></bold></a>
                            </li>
                        </ul>
                    </li>
					<img style="height: 12vw;" src="img/precio/3.png">
                    </div>           
					<BR> 
                        <a href="pago.html" class="btnL">PAGAR</a>
				<br>
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
