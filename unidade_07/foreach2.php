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
        $agenda = array(
                    "nome" => "Douglas",
                    "sobrenome" => "Silva",
                    "salario" => 1000,
                    "aniversario" => "03/08/1990"
                  );

        foreach ($agenda as $atributo => $valor){
          echo "$atributo : $valor <br>";
        }

    ?>
</body>
</html>
