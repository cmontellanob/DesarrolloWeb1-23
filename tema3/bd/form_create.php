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

    <form   action="create.php" method="POST">
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" >
        </div>
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" >
        </div>
        <div>
            <label for="celular">Celular:</label>
            <input type="number" name="celular" >
        </div>
        <input type="submit" value="Crear">
        


    </form>
    
</body>
</html>