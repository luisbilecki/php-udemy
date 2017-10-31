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
    //determinar o timezone
    date_default_timezone_set('America/Sao_Paulo');
    $agora = getdate();

    //criar elementos
    $ano = $agora["year"];
    $mes = $agora["mon"];
    $dia = $agora["mday"];

    $hora = $agora["hours"];
    $minuto = $agora["minutes"];
    $segundo = $agora["seconds"];

    echo "$dia/$mes/$ano - $hora:$minuto:$segundo<br>";

    //Outra forma de fazer o mesmo código
    echo date('d/m/Y - H:i:s');
  ?>
</body>
</html>
