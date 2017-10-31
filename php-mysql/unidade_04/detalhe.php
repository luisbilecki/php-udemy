<?php require_once("../conexao/conexao.php"); ?>
<?php
    if (isset($_GET["codigo"])){
        $produto_id = $_GET["codigo"];
    }
    else{
        Header("Location: inicial.php");
    }

    //Consultar o banco de dados
    $produto = "SELECT * FROM produtos WHERE produtoID = {$produto_id} ";
    $detalhe = mysqli_query($conecta,$produto);

    //Testar erro
    if(!$detalhe){
        die("Falha ao pesquisar detalhes do produto");
    }
    else{
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php") ?>

        <main>
            <?php print_r($dados_detalhe); ?>
        </main>

        <?php include_once("_incluir/rodape.php") ?>
    </body>
</html>

