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
            <li onmouseover="glyphOver('img/home-glyph.png')" onmouseout="glyphOver('img/cifrao-glyph.png')"><a href="http://sobrinhopasteleiro.atspace.cc/">Home</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-cred.php"; ?>">Sim Cred</a></li>
            <li onmouseover="glyphOver('img/trade-glyph.png')" onmouseout="glyphOver('img/cifrao-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sim-invest.php"; ?>">Sim Invest</a></li>
            <li onmouseover="glyphOver('img/contato-glyph.png')" onmouseout="glyphOver('img/cifrao-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "contato.php"; ?>">Contato</a></li>
            <li onmouseover="glyphOver('img/sobre-glyph.png')" onmouseout="glyphOver('img/cifrao-glyph.png')"><a href="<?php echo $_SERVER['HTTP_URI'] . "sobre.php"; ?>">Sobre</a></li>
            <li class="to-right"><a href="<?php echo $_SERVER['HTTP_URI'] . "login.php"?>">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Corpo do Site -->
    <div id="left-site" class="col-2">
      <img id="glyph" src="img/cifrao-glyph.png" alt="Crédito"/>
    </div>
<article class="col-10">
  <div class="content">
    <h2>Home > Sim-Cred</h2>
    <br><br>
    <form id="content-cred">
      <h1>FICHA CADASTRAL E INFORMAÇÃO SOBRE FOLHA DE PAGAMENTO</h1>
      <br>
      <fieldset class="fieldcred"><legend>DADOS PESSOAIS</legend>
        <label for="fNome">Nome</label>&nbsp;<input type="text" name="nome" id="fNome" min="6" size="30" maxlength="40" placeholder="Nome Completo" required><br>
        Inscrição&nbsp;<input type="text" name="numinsc" id="fInsc" required><br>
        Nascimento&nbsp;<input type="date" name="nasc" id="fNasc" required><br>
        Núm. CPF&nbsp;<input type="text" name="cpf" maxlength="14" id="fCpf" required onkeypress="formatString('###.###.###-##', this)"><br>
        Admissão&nbsp;<input type="date" name="inicio" id="fAdm"><br>
        Renda Bruta&nbsp;<input type="text" name="rbm" id="fRbm"><br>
      </fieldset>
      <fieldset class="fieldcred"><legend>DADOS ADICIONAIS</legend>
        Imposto de Renda&nbsp;<input type="text" name="irrf" id="fIR"><br>
        Pensão Alimentícia&nbsp;<input type="text" name="pa" id="fPA"><br>
        Outros empréstimos&nbsp;<input type="text" name="outros" id="fOutros"><br>
        Margem Atualizada&nbsp;<input type="text" name="pmt" id="fMargem" value="0,00" readonly><br>
      </fieldset>
      <fieldset class="fieldcred"><legend>CÁLCULO E SIMULAÇÃO DE FINANCIAMENTO</legend>
        Saldo Devedor&nbsp;<input type="text" name="sldev" value="0,00"><br>
        Valor Pretendido&nbsp;<input type="text" name="valor" placeholder="Ex.: 1.000,00"><br>
        Valor da Parcela&nbsp;<input type="text" name="parc" placeholder="Mín. 10,00"><br>
        Quantidade&nbsp;<input type="number" name="qtde" value="12" step="12" min="12" max="72">&nbsp;<input type="button" name="btn-calc" value="Calcular"><br><br>

        VALOR LIBERADO&nbsp;<input type="text" name="liberado" readonly>
      </fieldset>
    </form>
  </div>
</article>

  <footer id="bot-site" class="col-12">
    <h3>O Sobrinho Pasteleiro é um site criado por <a href="https://github.com/rafascerqueira" target="_blank">Rafael Cerqueira</a>. <br>Este site está disponibilizado sob Licença MIT.</h3>
  </footer>

</body>
</html>
