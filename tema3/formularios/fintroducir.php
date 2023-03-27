<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="suma.php" method="post">
<?php
$n=$_GET['n'];

for ($i=0;$i<$n;$i++)
{
    echo "<input type='number' name='valor[]'>";
    echo "<input type='number' name='valor$i'><br>";
}

?>
<input type="hidden" name="n" value="<?php echo $n;?>">

<input type="submit" value="sumar">
</form>
    
</body>
</html>

