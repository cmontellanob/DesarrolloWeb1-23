<?php
$dias = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
echo $dias[0];
echo $dias[1];
?>
<h2>Arreglo completo</h2>
<?php
echo "<pre>";
print_r($dias);
echo "</pre>";
echo "<h2> ciclo for</h2>";
for ($i = 0; $i < count($dias); $i++) {
    echo "<div>" . $dias[$i] . "</div>";
}
echo "<h2>ciclo foreach </h2>";
foreach ($dias as $dia) {
    echo "<div>$dia</div>";
}
echo "<h2>ciclo foreach con indices</h2>";
foreach ($dias as $indice => $dia) {
    echo "<div>$indice $dia</div>";
}
?>