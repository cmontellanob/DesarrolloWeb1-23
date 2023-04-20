<?php
include('verificar.php');
include('permiso.php');
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$id = $_POST['id'];
$idprofesion = $_POST['idprofesion'];
include('conexion.php');
if (isset($_FILES['archivo']['tmp_name'])) {
    $archivo_original = $_FILES['archivo']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['archivo']['tmp_name'], 'images/' . $fotografia);
    $sql = "UPDATE personas SET fotografia='$fotografia', nombres='$nombres',apellidos='$apellidos',celular=$celular,idprofesion=$idprofesion
WHERE id=$id";
} else {
    $sql = "UPDATE personas SET  nombres='$nombres',apellidos='$apellidos',celular=$celular,idprofesion=$idprofesion
    WHERE id=$id";
}


echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />