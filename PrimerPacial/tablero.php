<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.php">
    <style>
        .cuadro {
            width: 100px;
            height: 100px;
            background-color: <?php echo $_GET['color']; ?>;
        }

        .cuadro-blanco {
            width: 100px;
            height: 100px;
            background-color: white;
        }
    </style>
</head>

<body>

    <?php
    $fila = $_GET['fila'];
    $columna = $_GET['columna'];
    $color = $_GET['color'];
    $nombre = $_GET['nombre'];
    ?>
    <table>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                if (($i % 2  == 0 and $j % 2 == 0) or ($i % 2  == 1 and $j % 2 == 1)) {
                    $estilo = 'cuadro';
                } else {
                    $estilo = 'cuadro-blanco';
                }
                echo '<td class="' . $estilo . '">';
                if ($fila - 1 == $i and $columna - 1 == $j) {
                    echo $nombre."<br>";
                    echo '<img width="50px" src="Bowser.png">';
                } else {
                    echo '&nbsp;';
                }
                echo '</td>';
            }
            echo "</tr>";
        }

        ?>
    </table>


</body>

</html>