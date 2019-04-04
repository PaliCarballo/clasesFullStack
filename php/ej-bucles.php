<?php
// Ej 1 y 2
$aleatorio = rand(1, 100);

 for ($i=0; $i <= $aleatorio; $i++) {
   echo $i . "<br>";
 }

// Ej 3
$i = 100;
while ($i >= 85) {
  echo $i. "<br>";
  $i--;
}

// Ej 4
$cara = 0;
$contador = 0;

while ($cara < 5) {
  $moneda = rand(0,1);
  $contador++;
  if ($moneda == 0) {
    $cara++;
  } echo $contador. '<br>';
}

// Ej 5
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $pais => $ciudades) {
  echo "Las ciudades de ".$pais. ' son: <br><ul>';
  foreach ($ciudades as $ciudad) {
    echo '<li>'.$ciudad. '</li>';
  } echo '</ul>';
}

foreach ($ceu as $pais => $ciudades) {
  $capital = $ciudades[0];
  $capitales[] = $capital; // creo un array y le voy agregando capitales
  echo "La capital de".$pais. " es ".$capital."<br>";
}






























 ?>
