<?php require_once("../conexao/conexao.php"); ?>

 <?php
      //Passo 3 - Abre consulta ao banco de dados
      //$consulta = "SELECT * FROM categorias";
      $consulta = "SELECT nomeproduto, tempoentrega FROM produtos";

      $categorias = mysqli_query($conecta, $consulta);

      if ( !$categorias ){
        die("Falha ao consultar a tabela categorias.");
      }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curso PHP FUNDAMENTAL</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <ul>
    <?php
    //Passo 4 - Listar

      while ( $registro = mysqli_fetch_assoc($categorias) ){

      ?>
      <li><?php
            //echo $registro["nomecategoria"]
            echo $registro["nomeproduto"];
            ?></li>
    <?php } ?>
  </ul>

  <?php
      //Passo 5 - Liberar dados da memória
      mysqli_free_result($categorias);

      //Passo 6 - Desconectar
      mysqli_close($conecta);
  ?>

  <!--
    <?php
        //while ( $registro = mysqli_fetch_row($categorias) ){
        while ( $registro = mysqli_fetch_assoc($categorias) ){
            print_r($registro);
            echo "<br>";
        }
    ?>
    -->
</body>
</html>
