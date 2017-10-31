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
      $salario = 800;
      $premio = 800;

      if ($salario == $premio){
         echo "salario é igual a prêmio<br>";
      }else{
         echo "salario não é igual a prêmio<br>";
      }


      if ($salario === $premio){
         echo "salario é idêntico a prêmio<br>";
      }else{
         echo "salario não é idêntico a prêmio<br>";
      }
  ?>
</body>
</html>
