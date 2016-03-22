<?php
  # Configurações gerais do SGBD
  # DBMS General Settings

  $hostserver = "localhost";
  $user_name = "root"; # "2010989_sobpast"
  $password = "123456"; # "a2016@sbpt"
  $db_name = "sobrinho"; # "2010989_sobpast"
  $tb_name = "membros";

  $site_name = "Sobrinho Pasteleiro";

  // Connection Factory
  $conn = new mysqli($hostserver, $user_name, $password);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  echo "connected succefully";

?>
