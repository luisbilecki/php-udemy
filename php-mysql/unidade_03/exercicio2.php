<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
          //include se tem erro continua
          //require para a pagina
          //include("pagina3.php");
          include_once("pagina2.php");
          include_once("pagina2.php");
          //require("pagina3.php");
          echo "<br>";
          include("pagina1.php");
          echo "<br>";
          require_once("pagina1.php");
          require_once("pagina1.php");
          echo "<br>";
       ?>
    </body>
</html>
