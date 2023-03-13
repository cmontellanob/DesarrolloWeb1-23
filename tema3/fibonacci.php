<?php
$n=5;

$f=0;
$f1=1;
$f2=1;
echo "$f1 $f2 ";
for ($i=0;$i<$n;$i++)
{
    $f=$f1+$f2;
    echo "$f ";
    $f1=$f2;
    $f2=$f;
}
?>


