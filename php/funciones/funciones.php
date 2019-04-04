<?php
/* Definir una variable llamada numeroMagico, que contenga un número, dicha
variable deberá estar en la 1er línea de nuestro código PHP. */
$numeroMagico = 11;
/* Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos
números con numeroMagico. */
  function mayor ($num1, $num2) {
    $numeroMagico = 11;
    if ($num1 > $num2 && $num1 > $num3) {
      return $num1;
    } if ($num2 > $num3 && $num2 > $num1) {
      return $num2;
    } else {
      return $num3;
    }

  }
echo mayor (2,12,7);

/*Definir una función tabla() que reciba un parámetro base, un parámetro límite,
y devuelve un array con la secuencia de números desde el numero base
hasta el numero limite*/

function tabla ($base, $limite) {
  $array = [];
  for ($i=$base; $i <= $limite; $i++) {
    $array[] = $i;
  } return $array;
}
var_dump(tabla(2,20));





?>
