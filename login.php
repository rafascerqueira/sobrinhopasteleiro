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
    <div class="col-4">
      <form id="login-user" action="home.php" method="post">
        <fieldset id="cLogin"><legend>Entrar</legend>
          <div class="mid">
            Usuário <input type="text" name="user_name" placeholder=" Nome de usuário" required><br/>
            Senha <input type="password" name="password" placeholder=" Senha" required><br/>
          <input type="submit" name="entrar" value="Entrar">
          <input type="button" name="registrar" value="Registre-se" onclick="register()">
        </div>
        </fieldset>

      </form>
    </div>
    <div class="col-8" id="outside-login">
      <h1>Entre ou Registre-se</h1> <br/> <br/>
      <form id="regForm" action="register.php" method="post">
        Nome Completo <input type="text" name="regNomeCompl" required> <br/>
        E-mail <input type="text" name="regEmail" required> <br/>
        Usuário <input type="text" name="regUser" required> <br/>
        Senha <input type="password" name="regPswd" required> <br/>
        <input type="submit" name="regEnter" value="Cadastrar">
      </form>

    </div>


    <!-- Rodapé do Site -->
    <footer id="bot-site" class="col-12">
      <h3>O Sobrinho Pasteleiro é um site criado por <a href="https://github.com/rafascerqueira" target="_blank">Rafael Cerqueira</a>. <br>Este site está disponibilizado sob Licença MIT.</h3>
    </footer>

  </body>
</html>
