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
      for ($contador = 1; $contador < 10; $contador++){
        echo rand(1,60) . "<br>";
      }

      echo "<br>For sem parada declarada no início<br>";

      for ($contador = 1; ; $contador++){
        if ($contador == 7)
          break;
        echo rand(1,60) . "<br>";
      }
    ?>
</body>
</html>
