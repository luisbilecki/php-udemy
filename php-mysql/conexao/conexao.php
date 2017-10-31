<?php
      $servidor = "localhost";
      $usuario = "usuario";
      $senha = "#Phpudemy123";
      $banco = "andes-teste";

      //Passo 1 - Conectar
      $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

      //Passo 2 - Teste de conexão
      if ( mysqli_connect_errno() ){
        die("Falha ao conectar: " . mysqli_connect_errno());
      }
 ?>
