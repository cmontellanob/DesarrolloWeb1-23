<?php

include('verificar.php');
if (!isset($_GET['orden'])) {
    $orden = 'per.id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%".str_replace(" ","%",$_GET['buscar'])."%'";
}


include('conexion.php');
$sql = "SELECT per.id,fotografia,nombres,apellidos,celular,nombre as profesion FROM personas per 
left join profesiones pro on per.idprofesion=pro.id
where nombres like $buscar 
order by $orden
";
echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <div>
        <form action="read.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="text" name="buscar" value="<?php echo isset($_GET['buscar'])?$_GET['buscar']:''; ?>">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <table>
        <tr>
            <th>Fotografia</th>
            <th><a href="read.php?orden=nombres"> Nombres</a></th>
            <th><a href="read.php?orden=apellidos">Apellidos</a> </th>
            <th><a href="read.php?orden=celular">Celular</a></th>
            <th><a href="read.php?orden=nombre">Profesion</a></th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><img width="100px" src="images/<?php echo $row['fotografia'];  ?>" alt=""> </td>
            <td><?php echo $row['nombres'] ?> </td>
                <td><?php echo $row['apellidos'] ?></td>
                <td><?php echo $row['celular'] ?></td>
                <td><?php echo $row['profesion'] ?></td>
                <td>
                    <?php if ($_SESSION['nivel'] == 1) { ?>
                        <a href="form_update.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
if ($_SESSION['nivel'] == 1) {
?>
    <a href="form_create.php">Insertar</a>
<?php
}
$con->close();
?>