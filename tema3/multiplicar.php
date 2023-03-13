<?php 

$a=3;
$b=4;

$multi=0;
for ($i=0;$i<$a;$i++)
{
    $multi+=$b;
}

echo "$a x $b = $multi";
?>
<div style="border: 1px solid black;background-color: yellow;width: 300px;margin:0 auto">
<?php echo $multi; ?>
</div>
