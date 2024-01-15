<?php
// Inicia la sesión
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al formulario de inicio de sesión
header("Location: index.html");
exit();
?>
