<?php
  session_start();

  //var_dump($_POST['contador']);

  if ($_POST['boton'] == 'Reiniciar') {
    $_SESSION['contador'] = 0;
  }

  if ($_POST['boton'] == 'Incrementar') {
    $_SESSION['contador']++;
  }

  header('Location:mostrar.php');
?>
