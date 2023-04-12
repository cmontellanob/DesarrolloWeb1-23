<?php session_start();
$correo = $_POST['correo'];
$contrasena = sha1($_POST['contrasena']);
include('conexion.php');
$sql = "SELECT id,nombres,correo,nivel FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    setcookie('correo',$correo,0);
    $fila = $resultado->fetch_assoc();
    $_SESSION['nombres'] = $fila['nombres'];
    $_SESSION['correo'] = $fila['correo'];
    $_SESSION['nivel'] = $fila['nivel'];
    header("location:read.php");
} else {
?>
    Error contraseña no valida
    <meta http-equiv="refresh" content="3; url=login.html" />
<?php
}
?>