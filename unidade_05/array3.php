<?php
    $lost = array(23,15,16,8,42,4);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Máximo:" . max($lost) . "<br>";
            echo "Mínimo:" . min($lost)."<br>";
            echo "Soma:" . array_sum($lost)."<br>";

            sort($lost);
        ?>

        <pre>
            <?php print_r($lost); ?>
        </pre>

        <?php
            rsort($lost); ?>


        <pre>
            <?php print_r($lost); ?>
        </pre>
    </body>
</html>
