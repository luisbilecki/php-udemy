<?php
  $fumante = false;

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
          echo "Você fuma? " . $fumante . "<br>";
          echo "Variável é booleana " . is_bool($fumante);
      ?>
    </body>
</html>
