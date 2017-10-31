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
    date_default_timezone_set('America/Sao_Paulo');
    $agora = getdate();
    print_r($agora);
  ?>
</body>
</html>
