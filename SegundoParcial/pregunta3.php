<?php include('conexion.php');
$sql = "SELECT id,carrera from carreras";
$sql2 = "SELECT id,editorial from editoriales";

$resultado = $con->query($sql);
$resultado2 = $con->query($sql2);
?>


<form id="form-datos" action="javascript:registrar()" method="POST" enctype="multipart/form-data">
  <div>
    <label for="archivo">imagen:</label>
    <input type="file" name="imagen" required>
  </div>
  <div>
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" required>
  </div>
  <div>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" required>
  </div>
  <div>
    <label for="editorial">Editorial:</label>

    <select name="ideditorial" required>
      <?php while ($editorial = $resultado2->fetch_assoc()) {
       ?>
        <option value="<?php echo $editorial['id']; ?>">
          <?php echo $editorial['editorial']; ?></option>
      <?php
      }
      ?>
    </select>
  </div>

  <div>
    <label for="anio">Ano:</label>
    <input type="number" name="anio" required>
  </div>
  <div>
    <label for="idcarrera">Carrera:</label>

    <select name="idcarrera" required>
      <?php while ($carrera = $resultado->fetch_assoc()) {
      ?>
        <option value="<?php echo $carrera['id']; ?>">
          <?php echo $carrera['carrera']; ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <input type="submit" value="Crear">



</form>