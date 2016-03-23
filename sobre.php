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
            <li onmouseover="glyphOver('img/home-glyph.png')" onmouseout="glyphOver('img/sobre-glyph.png')"><a href="http://sobrinhopasteleiro.atspace.cc/">Home</a></li>
            <li onmouseover="glyphOver('img/cifrao-glyph.png')" onmouseout="glyphOver('img/sobre-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-cred.php"; ?>">Sim Cred</a></li>
            <li onmouseover="glyphOver('img/trade-glyph.png')" onmouseout="glyphOver('img/sobre-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-invest.php"; ?>">Sim Invest</a></li>
            <li onmouseover="glyphOver('img/contato-glyph.png')" onmouseout="glyphOver('img/sobre-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "contato.php"; ?>">Contato</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "sobre.php"; ?>">Sobre</a></li>
            <li class="to-right"><a href="<?php echo $_SERVER['HTTP_URI'] . "login.php"?>">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Corpo do Site -->
    <div id="left-site" class="col-2">
      <img id="glyph" src="img/sobre-glyph.png" alt="Home"/>
    </div>
    <article class="col-10">
    <div class="content">
      <h2>Home > Sobre</h2>
      <br><br>
      <h1>O Sobrinho Pasteleiro</h1>
      <br>
      <p>A criação foi idealizada como um <span>hobby</span>, no qual desenvolvo para simular situações no qual já trabalhei. E como forma(minimalista) de disponibilizar também minha capacidade profissional na área de T.I., visando uma melhora crítica as criações, códigos e projetos.</p>
      <br><br>
      <h3>Copyright (c) 2016, Sobrinho Pasteleiro</h3>
      <br>
      <p>A permissão é concedida, gratuitamente, a qualquer pessoa que obtenha uma cópia deste software e dos arquivos de documentação associados (o "Software"), para lidar com o Software sem restrições, incluindo, sem limitação, os direitos de usar, copiar, modificar, mesclar , publicar, distribuir, sub-licenciar e / ou vender cópias do Software, e para permitir que as pessoas a quem o Software é fornecido a fazê-lo, observadas as seguintes condições: o aviso de copyright acima e este aviso de permissão devem ser incluídos em todas as cópias ou partes substanciais do Software. O SOFTWARE É FORNECIDO "COMO ESTÁ", SEM GARANTIA DE QUALQUER TIPO, expressa ou implícita, INCLUINDO, SEM LIMITAÇÃO, AS GARANTIAS DE COMERCIALIZAÇÃO, ADEQUAÇÃO A UM DETERMINADO FIM E NÃO VIOLAÇÃO. EM NENHUM CASO OS AUTORES ou direitos de autor DETENTORES DE SER RESPONSÁVEL POR QUALQUER RECLAMAÇÃO, DANOS OU OUTRA RESPONSABILIDADE, SEJA EM UMA AÇÃO DE CONTRATO, DELITO OU DE OUTRA FORMA, DECORRENTES DE, OU EM CONEXÃO COM O SOFTWARE OU O USO OU OUTRA APLICAÇÃO DO PROGRAMAS.</p>
      <p class="tiny-right">ref.: MIT Lisence</p>
      <br><br>
      <p>A distribuição do código fonte será feita em um repositório do Github no perfil do criador, e respeitando as condições sob a licença acima, você poderá inclusive modificar e sugerir melhorias ao código original.</p>
      <br>
      <p class="reference"><a href="https://github.com/rafascerqueira/sobrinhopasteleiro">Source / Código Fonte [Github]</a></p>
    </div>
    </article>

    <!-- Rodapé do Site -->
    <footer id="bot-site" class="col-12">
      <h3>O Sobrinho Pasteleiro é um site criado por <a href="https://github.com/rafascerqueira" target="_blank">Rafael Cerqueira</a>. <br>Este site está disponibilizado sob Licença MIT.</h3>
    </footer>

  </body>
</html>
