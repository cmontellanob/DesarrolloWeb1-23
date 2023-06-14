<?php
if (!isset($_GET['orden'])) {
  $orden = 'lib.id';
} else {
  $orden = $_GET['orden'];
}
include('conexion.php');
$sql = "SELECT lib.id,imagen,titulo,autor,editorial,anio,carrera FROM libros lib 
left join editoriales edi on lib.ideditorial=edi.id
left join carreras car on lib.idcarrera=car.id
order by $orden
";

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
  <table>
    <tr>
      <th>Imagen</th>
      <th><a href="javascript:ordenar('titulo')">Titulo</a></th>
      <th><a href="javascript:ordenar('autor')">Autor</a> </th>
      <th><a href="javascript:ordenar('editorial')">Editorial</a></th>
      <th><a href="javascript:ordenar('anio')">Año</a></th>
      <th><a href="javascript:ordenar('carrera')">Carrera</a></th>
      <th>Operaciones</th>
    </tr>
    <?php while ($row = $resultado->fetch_assoc()) {
    ?>
      <tr>
        <td><img width="100px" src="images/<?php echo $row['imagen']; ?>"> </td>
        <td><?php echo $row['titulo'] ?> </td>
        <td><?php echo $row['autor'] ?></td>
        <td><?php echo $row['editorial'] ?></td>
        <td><?php echo $row['anio'] ?></td>
        <td><?php echo $row['carrera'] ?></td>
        <td>
          <a href="javascript:editar('<?php echo $row['id'] ?>')">Editar</a>
          <a href="javascript:eliminar('<?php echo $row['id'] ?>')">Editar</a>
        <?php } ?>
        </td>
      </tr>

  </table>
<?php
} else {
  echo "nohay datos que mostrar";
}
?>