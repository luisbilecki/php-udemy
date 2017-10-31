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
    function retornarDiaria($salario,$dias){
      return number_format($salario/$dias,2);
    }

    $salario = 3000;
    $dias = 10;
    $diaria = retornarDiaria($salario,$dias);
    echo "Para um salário de $salario a diária é de $diaria.<br>";
  ?>
</body>
</html>
