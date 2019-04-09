<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La yuta madre</title>
  </head>
  <body>

    <form class="" action="proceso_modificar.php" method="POST">
      <input type="submit" name="boton" value="Reiniciar">
    </form>
    <form class="" action="proceso_modificar.php" method="POST">
      <input type="submit" name="boton" value="Incrementar">
    </form>
    
<!--
    <a href="proceso_modificar.php?botonDeGet=Reiniciar">Reiniciar</a>
    <a href="proceso_modificar.php?botonDeGet=Incrementar">Incrementar</a>
-->

  </body>
</html>
