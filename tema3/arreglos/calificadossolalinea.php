<? 

$alumno=[
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => 20,
    "carrera" => "IS",
    "materias" => ["matematicas", "programacion", "bases de datos"]
];

echo "<h2> ciclo for each</h2>";
foreach ($alumno as $indice => $valor) {
    if ($indice != "materias") {
        echo "<div>$indice : $valor</div>";
    } else {
        echo "<div>$indice : </div>";
        foreach ($valor as $materia)
        {
            echo '<div style="padding-left:50px;">'.$materia.'</div>';
        }
    }

]
?>