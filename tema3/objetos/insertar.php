<?php
include ('pila.php');
session_start();
$valor=$_GET['valor'];
if (!isset($_SESSION['p']))
{
    $_SESSION['p']=new Pila();
}

$_SESSION['p']->insertar($valor);
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">
