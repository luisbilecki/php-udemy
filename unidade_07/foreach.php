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
        $salada = array("Maçã", "Abacate", "Laranja", "Banana", "Uva");

        foreach ($salada as $fruta) {
            echo "A fruta da vez é $fruta<br>";
        }
    ?>
</body>
</html>
