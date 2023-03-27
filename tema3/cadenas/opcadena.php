<?php
$cadena=$_GET['cadena'];
echo $cadena;
echo "<br/>";
echo strlen($cadena);
echo "<br/>";
?>
<hr>
<?php
for ($i=0;$i<strlen($cadena);$i++)
{
    echo $cadena[$i].'<br/>';    
}

?>
<hr>
<h1>cuadrado</h1>
<?php
echo $cadena."<br>";
$l=strlen($cadena);
for ($i=1;$i<$l-1;$i++)
{
    echo $cadena[$i];    
    for($j=1;$j<$l-1;$j++)
    {
        echo "&nbsp;";
    }
    echo $cadena[$l-$i-1].'<br/>';
}
for ($i=$l;$i>0;$i--)
{
    echo $cadena[$i-1];
}
?>
<hr>
<h2>cuadrado bonito</h2>
<table>
<?php
echo "<tr>";
for ($i=0;$i<$l;$i++)
{
    echo "<td>".$cadena[$i]."</td>";
}
echo "</tr>";
for ($i=1;$i<$l-1;$i++)
{
    echo "<tr>";
    echo "<td>".$cadena[$i]."</td>";
    for($j=1;$j<$l-1;$j++)
    {
        echo "<td>&nbsp;</td>";
    }
    echo "<td>". $cadena[$l-$i-1]."</td>";
    echo "</tr>";
}
echo "<tr>";
for ($i=$l;$i>0;$i--)
{
    echo "<td>".$cadena[$i-1]."</td>";
}
echo "</tr>";
?>
</table>
