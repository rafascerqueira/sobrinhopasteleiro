<?php
  if (isset($_POST["nome"])) {
    $pagina = "mail_send.php";
  } else {
    $pagina = "sb_error.php";
  }

  header("location:$pagina");
?>
