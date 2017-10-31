<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php print_r($_POST) . "<br>"; ?>

      <?php
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
        $email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";

        echo "<br>Meu nome: $nome<br>Meu Email: $email<br>";
      ?>
    </body>
</html>
