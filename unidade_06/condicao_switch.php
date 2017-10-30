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
      $dia = "sexta";

      switch($dia) {
          case "segunda":
            echo "O final de semana está longe :( <br>";
            break;
          case "quarta":
            echo "É quase sexta ... <br>";
            break;
          case "sexta":
            echo "Oba \o/ chegou o dia da maldade! <br>";
            break;
          default:
            echo "Go ahead!";

      }


  ?>
</body>
</html>
