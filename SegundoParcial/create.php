<?php 

$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$ideditorial=$_POST['ideditorial'];
$anio=$_POST['anio'];
$idcarrera=$_POST['idcarrera'];


$archivo_original=$_FILES['imagen']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$imagen=uniqid().'.'.$extension;
include('conexion.php');

copy($_FILES['imagen']['tmp_name'],'images/'.$imagen);
$sql="INSERT into libros (imagen,titulo,autor,ideditorial,anio,idcarrera,idusuario)
VALUES ('$imagen','$titulo','$autor',$ideditorial,$anio,$idcarrera,1)";
//echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

