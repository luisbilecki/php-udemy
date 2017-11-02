<?php require_once("../conexao/conexao.php"); ?>

<?php
    //Determinar lcoalidade BR
    setlocale(LC_ALL, 'pt_BR');

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
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php") ?>

        <main>

            <div id="listagem_produtos">
                <?php  while($linha = mysqli_fetch_assoc($resultado)){ ?>
                    <ul>
                        <li class="imagem">
                            <a href="detalhe.php?codigo=<?php echo $linha['produtoID']?>">
                                <img src=<?php echo $linha["imagempequena"] ?>/>
                            </a>
                        </li>
                        <li style="font-weight:bold"><?php echo $linha["nomeproduto"] ?></li>
                        <li>Tempo de entrega: <?php echo $linha["tempoentrega"] ?></li>
                        <li>Preço unitário: <?php echo money_format('%.2n',$linha["precounitario"]) ?></li>
                    </ul>
                <?php } ?>
            </div>
        </main>

        <?php include_once("_incluir/rodape.php") ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
