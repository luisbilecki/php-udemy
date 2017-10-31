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
    function retornarDiaria($salario,$dias, $cotacao){
      $real = number_format($salario/$dias, 2);
      $dolar = number_format(($salario/$dias)/$cotacao, 2);
      return array($real, $dolar);
    }

    $salario = 3000;
    $dias = 10;
    list($diaria_real, $diaria_dolar) = retornarDiaria($salario, $dias, 3.50);

    echo "Diária em R$ $diaria_real <br>";
    echo "Diária em US$ $diaria_dolar <br>";
  ?>
</body>
</html>
