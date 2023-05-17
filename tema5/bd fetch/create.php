<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$idprofesion = $_POST['idprofesion'];

$fotografia = null;
if (isset($_FILES['archivo'])) {
    $archivo_original = $_FILES['archivo']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
}

include('conexion.php');

copy($_FILES['archivo']['tmp_name'], 'images/' . $fotografia);
$sql = "INSERT into personas (fotografia,nombres,apellidos,celular,idprofesion)
VALUES ('$fotografia','$nombres','$apellidos',$celular,$idprofesion)";
//echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<script>
sleep(5);
cargarContenido('read.php')
</script>
