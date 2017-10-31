<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curso PHP Fundamental</title>
  <link rel="stylesheet" href="">
</head>
<body>
    <?php
      $a = 5;
      $b = 3;

      if ( $a > $b ) {
        echo "A é maior do que B " . "<br>";
        echo "Vá até a página dos clientes. " . "<br>";
      }

      $fumante = false;

      if ( !$fumante ) {
        echo "Hey Amigão! Fumante não entra!";
      }

    ?>
</body>
</html>
