<?php

$n=$_POST['n'];

$suma=0;
foreach($_POST['valor'] as $valor)
{
    $suma+=$valor;
}
echo $suma;

$suma2=0;
for ($j=0;$j<$n;$j++)
{
    $suma2+=$_POST['valor'.$j];
}

echo $suma2;

?>