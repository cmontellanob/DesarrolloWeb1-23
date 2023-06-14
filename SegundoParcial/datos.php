<?php
include('conexion.php');
$sql = "SELECT imagen,titulo FROM libros ";

$resultado = $con->query($sql);
$libros = array();
while ($row = $resultado->fetch_assoc()) {
    $libros[] = $row;
}
echo json_encode($libros, JSON_UNESCAPED_UNICODE);


$con->close();