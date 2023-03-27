<?php 
$cadena=$_GET['cadena'];
$palabras=explode(" ",$cadena);
foreach ($palabras as $palabra)
{   
    ?>
    <div style="text-align: center;"><?php
            echo strtoupper($palabra[0]).strtolower( substr($palabra,1));
        ?></div>
    <?php
}