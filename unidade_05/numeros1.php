<?php
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // Multiplicacao e Divisao
            echo "Trimestre: " . ($salario * $meses) . "</br>";
            echo "Quinzena: " . ($salario/$meses) . "</br>";

            // Exponencial
            echo "8^2 = " . pow(8,2) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada de 36 = " . sqrt(36) . "</br>";

            // Randômico Generica
            echo "Um número aleatório qualquer: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Um número aleatório entre 1 e 5: " . rand(1,5) . "</br>";

            // Valor absoluto
            echo "Valor absoluto de -10 é ". abs(-10);

            // Outras funções numéricas
            //https://secure.php.net/manual/pt_BR/book.math.php
        ?>
    </body>
</html>
