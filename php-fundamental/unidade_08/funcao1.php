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
    function retornarDiaria($salario){
      return number_format($salario/30,2);
    }

    $salario = 5000;
    $diaria = retornarDiaria($salario);
    echo "Para um salário de $salario a diária é de $diaria.<br>";
  ?>
</body>
</html>
