<?php 
include('examen.php');

$ex=new Examen($_GET['cadena1'],$_GET['cadena2']);

$ex->cruzar();
?>