<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curso PHP FUNDAMENTAL</title>
  <link rel="stylesheet" href="">
</head>
<body>
    <?php
      $contador = 1;

      while ( $contador <= 10 ) {
        $sorteio = rand(1,60);
        echo $sorteio . " ";
        $contador++;
      }

    ?>
</body>
</html>
