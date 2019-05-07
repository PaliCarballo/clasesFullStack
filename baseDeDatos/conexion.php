<?php
  try{
    $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    // 1 me conecto
    $conex = new PDO('mysql:host=localhost;dbname=movies_db',
  'root', 'root', $opt);

    //echo '<pre>';
    //var_dump($conex);

    // 2 ejecutp un query
    $query = $conex->query('SELECT * FROM genres WHERE ranking >= 10');

    // 3 obtengo los datos de ese query
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($query);
  } catch(PDOException $e){
    echo 'No me pude conectar a la BD<br>';
    echo $e->getMessage();
  }

  echo '<br>Aqui estoy, muestrate';


?>
