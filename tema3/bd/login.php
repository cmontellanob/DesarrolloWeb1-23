<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticar</title>
</head>

<body>
    <form action="autenticar.php" method="POST">
        <div>
            <label for="correo">Correo:</label>
            <input type="email" name="correo"
             <?php if (isset($_COOKIE['correo'])) { ?>
                value="<?php echo $_COOKIE['correo'];
                } ?>"
            >
        </div>
        <div>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena">
        </div>
        <input type="submit" value="Ingresar">

    </form>

</body>

</html>