<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php
      $fumante = true;

      if ($fumante) // $fumante == true
          echo "A pessoa fuma.<br>";
      else
          echo "A pessoa não fuma.<br>";

      $dia = "sábado";

      if ( $dia == "sábado" || $dia == "domingo" ){
          echo "Dia de descansar.<br>";
      } else {
          echo "Você deve trabalhar.<br>";
      }
  ?>
</body>
</html>
