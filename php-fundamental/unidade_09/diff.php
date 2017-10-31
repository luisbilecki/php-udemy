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
      $data1 = new DateTime('2015-12-31');
      $data2 = new DateTime('2015-12-01');

      $intervalo = $data1->diff($data2);
  ?>

  <pre>
    <?php print_r($intervalo); ?>
  </pre>

  <pre>
    <?php print_r($intervalo->format('%r%a')); ?>
  </pre>
</body>
</html>
