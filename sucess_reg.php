<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>O Sobrinho Pasteleiro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/favicon.png">
    <script src="js/script.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Cabeçalho do Site -->
    <header id="top-site" class="col-12">
      <div id="logo">
        <img src="img/logo.png" alt="Sobrinho Pasteleiro" />
      </div>
      <div id="h-bottom">
        <nav id="menu">
          <ul>
            <li><a href="http://sobrinhopasteleiro.atspace.cc/">Home</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-cred.php"; ?>">Sim Cred</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-invest.php"; ?>">Sim Invest</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "contato.php"; ?>">Contato</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "sobre.php"; ?>">Sobre</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Corpo do Site -->

    <div class="col-12" id="outside-login">
      <h1>USUÁRIO CADASTRADO COM SUCESSO!</h1>
      <?php
        for ($i=0; $i < 20; $i++) {
          echo "<br/>";
        }
      ?>
    </div>


    <!-- Rodapé do Site -->
    <footer id="bot-site" class="col-12">
      <h3>O Sobrinho Pasteleiro é um site criado por <a href="https://github.com/rafascerqueira" target="_blank">Rafael Cerqueira</a>. <br>Este site está disponibilizado sob Licença MIT.</h3>
    </footer>

  </body>
</html>
