<?php
  # Configurações gerais do SGBD
  # DBMS General Settings
  $hostserver = "fdb6.atspace.me";
  $user_name = "2010989_sobpast";
  $password = "a2016@sbpt";
  $db_name = "2010989_sobpast";

  # Variáveis que vão passar parâmetros do Form para a Query sqlite_error_string
  $user = $_POST['regUser'];
  $pswd = $_POST['regPswd'];
  $name = $_POST['regNome'];
  $email = $_POST['regEmail'];

  // Connection Factory
  $conn = new mysqli($hostserver, $user_name, $password, $db_name);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $pagina = "sb_error.php";
  }

  $qReg = "INSERT INTO membros(usuario, senha, nome, email) VALUES('$user','$pswd','$name','$email');";

  // Cadastrar usuário
  if ($conn->query($qReg) === TRUE) {
    $pagina = "sucess_reg.php";
  } else {
    $pagina = "sb_error.php";
  }

  $conn->close();
  header("location:$pagina");
?>
