<?php
$con =new mysqli("localhost", "root", "","bd_agenda2023");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>