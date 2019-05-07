<?php
  require('conexion.php');

  $conex->query('SELECT * FROM movies');

  $resultados = $query->fechAll(PDO::FETCH_ASSOC);

?>
