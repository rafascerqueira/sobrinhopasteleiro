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
            <li onmouseover="glyphOver('img/cifrao-glyph.png')" onmouseout="glyphOver('img/home-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-cred.php"; ?>">Sim Cred</a></li>
            <li onmouseover="glyphOver('img/trade-glyph.png')" onmouseout="glyphOver('img/home-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-invest.php"; ?>">Sim Invest</a></li>
            <li onmouseover="glyphOver('img/contato-glyph.png')" onmouseout="glyphOver('img/home-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "contato.php"; ?>">Contato</a></li>
            <li onmouseover="glyphOver('img/sobre-glyph.png')" onmouseout="glyphOver('img/home-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sobre.php"; ?>">Sobre</a></li>
            <li class="to-right"><a href="<?php echo $_SERVER['HTTP_URI'] . "login.php"?>">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Corpo do Site -->
    <div id="left-site" class="col-2">
      <img id="glyph" src="img/home-glyph.png" alt="Home"/>
    </div>
    <article class="col-10">
    <div class="content">
      <h2>Home ></h2>
      <br><br>
      <h1>Sejam Bem Vindos</h1>
      <br>
      <p>Este site tem por finalidades didáticas e consiste no que aprendi acerca de desenvolvimento web. Importante lembrar que este site foi pensado em mostrar como a tecnologia <em>HTML5, CSS3 e JavaScript</em> são poderosas, e com dedicação e criatividade você pode simplesmente criar desde um simples Hotsite até um grande portal de acesso.</p>
      <br>
      <p>A seguir você poderá experimentar algumas features simulando situações reais de interatividade entre usuários e sistemas. Ao longo da experiência estaremos introduzindo situações Front-end e rotinas básicas de Back-end com <em>PHP</em> para acesso ao SGBD (no caso <em>MySQL</em>) além de disponibilizar o Código Fonte no Github.</p>
      <br><br>
      <table id="tconfig">
      <caption>Ferramentas Utilizadas:</caption>
      <tr class="rowcor1"><td>Notebook</td><td>Dell Inspiron N4050</td></tr>
      <tr class="rowcor2"><td>Sistema Operacional</td><td>Linux (Ubuntu v15.10)</td></tr>
      <tr class="rowcor1"><td>Editor de Texto</td><td>Atom v1.5.4</td></tr>
      <tr class="rowcor2"><td colspan="2">Configurações de Host</td></tr>
      <tr class="rowcor1"><td>Hospedagem</td><td>Atspace.com</td></tr>
      <tr class="rowcor2"><td>Banco de Dados</td><td>MySQL v5.5</td></tr>
      <tr class="rowcor1"><td>Programação</td><td>PHP v5.6.18</td></tr>
      </table>
      <br>
      <p>Obs.: Saiu o PHP 7, porém não estou utilizando porque ainda estou vendo as novidades.</p>
    </div>
    </article>

    <!-- Rodapé do Site -->
    <footer id="bot-site" class="col-12">
      <h3>O Sobrinho Pasteleiro é um site criado por <a href="https://github.com/rafascerqueira" target="_blank">Rafael Cerqueira</a>. <br>Este site está disponibilizado sob Licença MIT.</h3>
    </footer>

  </body>
</html>
