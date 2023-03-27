<?php
include ('pila.php');
session_start();

echo 'elemnto eliminado'. $_SESSION['p']->eliminar();


?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">