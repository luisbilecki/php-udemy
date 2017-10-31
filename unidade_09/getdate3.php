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
    setlocale(LC_TIME, "pt_BR");

    $ano = strftime('%Y');
    $mes = strftime('%B');
    $dia = strftime('%d');
    $dia_semana = strftime('%A');

    $hora = strftime('%H');
    $minuto = strftime('%M');
    $segundo = strftime('%S');

    echo "$dia_semana, $dia de $mes de $ano. A hora atual é $hora horas, $minuto minutos e $segundo segundos.<br>";
  ?>
</body>
</html>
