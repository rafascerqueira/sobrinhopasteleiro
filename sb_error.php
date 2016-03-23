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
            <li onmouseover="glyphOver('img/home-glyph.png')" onmouseout="glyphOver('img/contato-glyph.png')"><a href="http://sobrinhopasteleiro.atspace.cc/">Home</a></li>
            <li onmouseover="glyphOver('img/cifrao-glyph.png')" onmouseout="glyphOver('img/contato-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-cred.php"; ?>">Sim Cred</a></li>
            <li onmouseover="glyphOver('img/trade-glyph.png')" onmouseout="glyphOver('img/contato-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-invest.php"; ?>">Sim Invest</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "contato.php"; ?>">Contato</a></li>
            <li onmouseover="glyphOver('img/sobre-glyph.png')" onmouseout="glyphOver('img/contato-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sobre.php"; ?>">Sobre</a></li>
            <li class="to-right"><a href="<?php echo $_SERVER['HTTP_URI'] . "login.php"?>">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Corpo do Site -->
    <div id="left-site" class="col-2">
      <img id="glyph" src="img/contato-glyph.png" alt="Home"/>
    </div>
    <article class="col-10">
    <div class="content">
      <h2>Home > Contato</h2>
      <br><br>

      <h1>FORMULÁRIO DE CONTATO</h1>

      <br/> <br/> <br/> <br/>

      <h1 style="text-align: center">ERRO AO CONCLUIR <br/> Favor retornar</h1>

    </div>
    </article>

    <!-- Rodapé do Site -->
    <footer id="bot-site" class="col-12">
      <h3>O Sobrinho Pasteleiro é um site criado por <a href="https://github.com/rafascerqueira" target="_blank">Rafael Cerqueira</a>. <br>Este site está disponibilizado sob Licença MIT.</h3>
    </footer>

  </body>
</html>
