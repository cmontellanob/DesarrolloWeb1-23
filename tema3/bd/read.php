<?php
include('conexion.php');
$sql = "SELECT id,nombres,apellidos,celular FROM personas";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['nombres'] ?> </td>
                <td><?php echo $row['apellidos'] ?></td>
                <td><?php echo $row['celular'] ?></td>
                <td><a href="form_update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />