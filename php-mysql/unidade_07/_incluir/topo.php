<header>
    <div id="header_central">
        <?php
          if ( isset($_SESSION["user_portal"]) ){
            $nome = $_SESSION["nomecompleto"];
        ?>
          <div id="header_saudacao">
            <h5>Bem vindo, <?php echo $nome ?><br>
              <a href="sair.php">Sair</a></h5>
          </div>
        <?php } ?>
        <img src="assets/logo_andes.gif">
        <img src="assets/text_bnwcoffee.gif">
    </div>
</header>
