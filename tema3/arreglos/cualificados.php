<?php
$alumno["nombre"] = "Juan";
$alumno["apellido"] = "Perez";
$alumno["edad"] = 20;
$alumno["carrera"] = "IS";
$alumno["materias"] = array("matematicas", "programacion", "bases de datos");

echo "<h2> ciclo for</h2>";
foreach ($alumno as $indice => $valor) {
    if ($indice != "materias") {
        echo "<div>$indice : $valor</div>";
    } else {
        echo "<div>$indice : </div>";
        foreach ($valor as $materia)
        {
            echo '<div style="padding-left:50px;">'.$materia.'</div>';
        }
        foreach ($valor as $materia) { ?>
            <div style="padding-left:50px;"><?php echo $materia ?> </div>
<?php }
    }
}
?>