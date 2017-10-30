<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
          $nome = null;
          $endereco = "Aaaaa";
          echo "é null?" . is_null($nome) . "<br>";
          echo "é vazia?" . empty($nome) . "<br>";
          echo "é vazia?" . empty($endereco) . "<br>";
          echo "nome está configurado?" . isset($nome) . "<br>";
      ?>
    </body>
</html>
