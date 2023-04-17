<form action="sumar_vectores.php" method="post">
    <div style="display:flex">

    <div style="width:100">
        <?php
        $n = $_GET['n'];

        for ($i = 0; $i < $n; $i++) {
            echo '<input type="number" name="v1[]">';
        }
        ?>
        <input type="submit" valuellenar>
    </div>
    <div style="width:100">
        <?php
        for ($i = 0; $i < $n; $i++) {
            echo '<input type="number" name="v2[]">';
        }
        ?>
    </div>
    </div>
    <input type="submit" value="calcular">
</form>