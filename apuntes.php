<?php
//PHP admite código HTML asique de ahora en más todos los archivos son .php

Etiqueta de apertura
<?php
  echo "string"; // echo quiere decir que lo que sigue se muestra en pantalla
 ?>

// Un archivo podría crearse así
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Yo soy un string";
     ?>
  </body>
</html>

VARIABLES
$nombrevariable = "unValorAsignado"

= // Asignación
+
-

STRING // caracteres
INTEGER // numeros positivos o negativos
FLOAT // numeros con decimales
BOOLEAN // true or false
NULL // Variables sin valor Ej: $valor = "nule"

OPERADORES NUMERICOS // + - * / % es el resto ** potencia
STRING CONCATENACION // .

PARA IMPRIMIR STRING
  echo "Hola Mundo";
  echo $nombre;
  echo ($nombre); // cuestion de orden tipo cuenta matematica;
  echo "<h1>Imprimo en Html</h1>"

  var_dump("escribo la variable que quiero investigar"); // puede ser cualqueir valor Array, Boolean, String, Etc
  print_r

  echo "Me llamo" . $nombre . "" . $apellido;
  echo "Me llamo $nombre $apellido";

VALORES QUE INDICAN QUE ES FALSO // los datos que no tienen contenido son falsos
false
NULL
0
"0"
""
[]

VALORES QUE INDICAN QUE ES VERDADERO // cualquier dato que tenga contenido
eio_truncate
1
"1"
Cualquier dato con contenido

CONDICIONALES
$variable = 7;
if ($variable >= 18) {
  echo "es mayor";
} else {
  echo "es menor";//  no hace falta poner else
}

IF TERNARIOS
echo $edad >= 18? "es mayor" : "es menor";
o
$respuesta = $edad >= 18? "es mayor" : "es menor"; // estoy almacenando el resultado en una nueva variable

COMPARACION
==
!=
<
>
<=
>=

ANIDACION DE CONDICIONALES
|| // o
&& // y
! //negacion


ARRAYS bucles
$alumnos = [
  "mejor alumno" => "Juancito",
  "peor alumno" => "Javier",
  "el que llega tarde" => "Pedrito"
];

echo "El mejor alumno es" . $alumnos["mejor alumno"];

//foreach - nos da la ventaja de tomar un valor asosiativo con un key y un valor -
foreach ($alumnos as $key => $value) { //generalmente va del plural al singular (&alumnos as $alumno), sin $key
  echo "el alumno en posicion" . $key." es ".$value."<br>";
}

//do while - mientras sea verdadero segui , la condicion puede ser cualquier cosa, como en el while -
$i = 0
do {
  if($i == 2){
  brake;
  }
  echo "hola";
  $i++;
} while ($i < 3); //while - mientras se verdadero se repite -

//for - mientras sea verdadero, tengo un inicio, una condicion y unos pasos a seguir -
for ($i=27; $i >= 12 ; $i=$i-2) {
  echo $i. "<br>";
}


FUNCIONES //las reconocemos por los parentesis

<?php
  function sumar (int $num1, int $num2) { //sumar es el nombre de la funcion, con dos variables o parametros
    return $num1 + $num2; //Aclaro cual es la operacion que quiero que haga la funcion. Return dice que se termino la funcion ahi
  }
  echo sumar (82, 98); // una vez que la funcion ya se definio una vez se puede escribir solo el nombre de la funcion y darle dos valores , que la maquina ya sabe sumar.

//puede haber valores vacios, donde se le asigne un valor solo si queremos. Nunca puede ser el primer valor
function saludar (
  string $nombre,
  string $apellido = ""
) {
  return "$nombre . $apellido";
}
echo saludar("Juan", "Perez"); //imprimo la funcion. No puedo imprimir nada q se haya definido adentro (ej nombre y apellido) porque le pertenecen solo a la funcion


INCLUSION DE ARCHIVOS
include // incluye archivos pero si no lo encuentra no lo inluye y listo.
include_once //Incluye una vez cada archivo
require //inlcuye al archivo pero sino lo encuentra me tira error. ARCHIVOS OBLIGATORIOS
require_once

debug // vemos los errores
  echo //imprimo
  var_dump //veo en el navegador los detalles
  exit //corta la ejecucion. Hago var_dump de tal linea y la siguiente corto la ejecucion

?>

QUERYSTRING - son arrays asociativos

href=noticias.php?rubro=".rubro.">

//super global TOMA LOS DATOS DE LA URL
// Guarda URL unicas (favoritos, videos youtube, productos mercadolibre, historial)
? --> $_GET ["rubro"] //el ? genera el array asociativo SE USA PARA BUSCAR (buscadores)
? indice1 =valor1 & indice2 = valor2 ...

? --> $_POST // es privado, se usa en formularios, campos de textos, registro, lugares donde quiero mandar la info pero no quiero q sea visible para el usuario. Envia oculto, mas seguridad. SE USA PARA GUARDAR,LOGUERANOS, ACTUALIZAR (info sensible)






?>
