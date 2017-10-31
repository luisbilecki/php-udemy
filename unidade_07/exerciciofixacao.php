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
    $megasena = array();//array vazio
    $contador = 1;

    while ($contador < 7){
      $sorteio = rand(1,60);

      if (!in_array($sorteio,$megasena) ){
        $megasena[] = $sorteio;
        $contador ++;
      }
    }

    sort($megasena);

  ?>

  <pre>
    <?php print_r($megasena); ?>
  </pre>
</body>
</html>
