<?php 
if ($_SESSION['nivel']!=1) {
    header("location:mensaje_permiso.html");
    die("No tienes permiso para realizar esta accion");     
}
?>


