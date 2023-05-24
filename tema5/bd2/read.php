<?php

if (!isset($_GET['orden'])) {
    $orden = 'per.id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%" . str_replace(" ", "%", $_GET['buscar']) . "%'";
}


include('conexion.php');
$sql = "SELECT per.id,fotografia,nombres,apellidos,celular,nombre as profesion FROM personas per 
left join profesiones pro on per.idprofesion=pro.id
where nombres like $buscar 
order by $orden
";
//echo $sql;
$resultado = $con->query($sql);
$agenda = array();
while ($row = $resultado->fetch_assoc()) {
    $agenda[] = $row;
}
echo json_encode($agenda, JSON_UNESCAPED_UNICODE);


$con->close();
