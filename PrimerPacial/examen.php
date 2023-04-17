<?php
class Examen
{
    private $cadena1;
    private $cadena2;

    function __construct($cadena1, $cadena2)
    {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }
    function cruzar()
    {
        $p1 = 0;
        $p2 = 0;
        $bandera = 0;
        for ($i = 0; $i < strlen($this->cadena1); $i++) {
            for ($j = 0; $j < strlen($this->cadena2); $j++)

                if ($this->cadena1[$i] == $this->cadena2[$j] and $bandera == 0) {
                    $p1 = $i;
                    $p2 = $j;
                    $bandera = 1;
                }
        }
        if ($p1 == 0) {
            echo "no existen letras comunes";
            return 0;
        }
        echo '<table >';

        for ($i = 0; $i < strlen($this->cadena2); $i++) {
            echo "<tr>";
            for ($j = 0; $j < strlen($this->cadena1); $j++) {
                echo "<td class='cuadro'>";
                if ($i == $p2 and $j == $p1) {
                    echo $this->cadena1[$j];
                } else {
                    if ($i == $p2) {
                        echo $this->cadena1[$j];
                    }
                    if ($j == $p1) {
                        echo $this->cadena2[$i];
                    }
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
