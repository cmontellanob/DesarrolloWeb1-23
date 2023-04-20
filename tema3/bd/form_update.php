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
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT fotografia, nombres,apellidos,celular,idprofesion from personas where id=$id";
    $sql2 = "SELECT id,nombre from profesiones";

    $resultado = $con->query($sql);
    $resultado2 = $con->query($sql2);

    $row = $resultado->fetch_assoc();
    ?>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <img width="200px" src="images/<?php echo $row['fotografia']; ?>" alt="">
            <label for="archivo">Fotografia:</label>
            <input type="file" name="archivo">
        </div>
        
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>">
        </div>
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>">
        </div>
        <div>
            <label for="celular">Celular:</label>
            <input type="number" name="celular" value="<?php echo $row['celular']; ?>">
        </div>
        <div>
            <label for="idprofesion">profesion:</label>
            <select name="idprofesion">
                <?php while ($profesion = $resultado2->fetch_assoc()) {
                ?>
                    <option value="<?php echo $profesion['id']; ?>"
                    <?php echo $profesion['id']==$row['idprofesion']?'selected':''; ?>>
                    <?php echo $profesion['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Actualizar">



    </form>

</body>

</html>