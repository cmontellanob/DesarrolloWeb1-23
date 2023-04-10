<?php 
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$celular=$_POST['celular'];
$id=$_POST['id'];
include('conexion.php');

$sql="UPDATE personas SET  nombres='$nombres',apellidos='$apellidos',celular=$celular
WHERE id=$id";
echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />