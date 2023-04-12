<?php include('verificar.php');
include('permiso.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$id=$_GET['id'];
include('conexion.php');
$sql="SELECT nombres,apellidos,celular from personas where id=$id";
$resultado=$con->query($sql);

$row = $resultado->fetch_assoc();
?>
    <form   action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" >
        </div>
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" >
        </div>
        <div>
            <label for="celular">Celular:</label>
            <input type="number" name="celular" value="<?php echo $row['celular']; ?>" >
        </div>
        <input type="submit" value="Actualizar">
        


    </form>
    
</body>
</html>