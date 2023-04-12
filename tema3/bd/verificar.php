<?php session_start();
if (!isset($_SESSION['nombres'])) {
    header("location:mensaje.html");
    die("No estas autorizado");     
}
?>
<a href="cerrarsession.php">Cerrar Session</a>

