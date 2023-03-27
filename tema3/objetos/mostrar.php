<?php
include ('pila.php');
session_start();

$_SESSION['p']->imprimir();
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">