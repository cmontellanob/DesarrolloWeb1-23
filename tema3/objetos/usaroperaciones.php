<?php
$a=$_GET['a'];
$b=$_GET['b'];

$operacion=$_GET['operacion'];
include('operaciones.php');
if ($operacion=='suma')
{ 
    echo $a.'+'.$b.'='.operaciones::suma($a,$b);    
}
else
{
    echo $a.'+'.$b.'='.operaciones::resta($a,$b);    
}


?>