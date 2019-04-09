<?php
  session_start();

  if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
  }
  echo $_SESSION['contador'];
?>
 <br>
 <a href="modificar.php">IR A MODIFICAR</a>
