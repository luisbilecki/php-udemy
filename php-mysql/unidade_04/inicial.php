<?php require_once("../conexao/conexao.php"); ?>

<?php
    //consulta ao banco de dados
    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos";
    $resultado = mysqli_query($conecta, $produtos);

    if(!resultado){
        die("Falha na consulta de produtos!");
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php") ?>

        <main>
            <?php  while($linha = mysqli_fetch_assoc($resultado)){ ?>
                <ul>
                    <li><img src=<?php echo $linha["imagempequena"] ?>/></li>
                    <li><?php echo $linha["nomeproduto"] ?></li>
                    <li>Tempo de entrega: <?php echo $linha["tempoentrega"] ?></li>
                    <li>Preço unitário: <?php echo $linha["precounitario"] ?></li>
                </ul>
            <?php } ?>
        </main>

        <?php include_once("_incluir/rodape.php") ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
