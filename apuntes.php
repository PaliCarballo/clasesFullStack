<?php
//PHP admite código HTML asique de ahora en más todos los archivos son .php
// es un lenguaje que se ejecuta del lado del servido, el cliente (buscadores) no lo lee

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

<?php

VARIABLES // es el nombre que se le da a un espacio reservado en memoria que es como una caja donde se pueden guardar cosas

$nombrevariable = "unValorAsignado"

= // Asignación
+
-

STRING // caracteres
INTEGER // numeros positivos o negativos
FLOAT // numeros con decimales, se escriben con . no ,
BOOLEAN // true or false
NULL // Variables sin valor Ej: $valor = "null"

OPERADORES NUMERICOS // + - * / % es el resto ** potencia
STRING CONCATENACION // .

PARA IMPRIMIR STRING
  echo "Hola Mundo";
  echo $nombre;
  echo ($nombre); // cuestion de orden tipo cuenta matematica;
  echo "<h1>Imprimo en Html</h1>";

  var_dump("escribo la variable que quiero investigar"); // puede ser cualqueir valor Array, Boolean, String, Etc y en el navegador veo todo lo que contiene
  print_r

  echo "Me llamo" . $nombre . "" . $apellido;
  echo "Me llamo <a>$nombre $apellido</a>";
    // aunque es mejor
  echo "<p>Me llamo {$nombre} {$apellido}</p>";



VALORES QUE INDICAN QUE ES FALSO // los datos que no tienen contenido son falsos
false
NULL
0
"0"
""
[]

VALORES QUE INDICAN QUE ES VERDADERO // cualquier dato que tenga contenido
true
1
"1"
Cualquier dato con contenido

OPERADORES PARA VALIDAR ESOS DATOS
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

CONDICIONALES
    $variable = 7;
    if ($variable >= 18) {
      echo "es mayor";
    } else {
      echo "es menor";//  no hace falta poner else
    }

IF TERNARIOS O IF CORTO // Es un operador que devuelve un valor
condicion ? true : false;

    echo $edad >= 18? "es mayor" : "es menor";
    o
    $respuesta = $edad >= 18? "es mayor" : "es menor"; // estoy almacenando el resultado en una nueva variable

condicion ?? false; // devuelve el mismo valor o el falso


BUCLES // bloques de codigo que vamos a repetir

1) FOR // Repetitiva exacta, algo que se repite una cantidad exacta de veces

    for (inicio; condicion; paso) {
        condicion a ejecutar
    }

    INICIO = donde iniciamos la variable, se ejecuta SOLO una vez al principio // $i=0
    CONDICION = el codigo se va a repetir siempre y cuando esta condicion de true, cuando da false se termina el for
    PASO = modificar la variable del inicio, generalmente incrementa + 1, para que en algun momento de false y no caigamos en un bucle infinito // $i++

    for($i=0; $i<10; $i++){
        echo $i;
    }

Nos sirve para recorrer un ARRAY // si en la CONDICION ponemos count($laVariable) ese numero se reemplaza por la cantidad de elementos que hay en el array
    $colores= ["rojo", "verde", "amarillo"];
    for ($i=0; $i < count($colores); $i++) {
        echo $colores[$i] . "<br>";
    }

2) REPETITIVAS INEXACTAS // Cuando no sabemos cuantas veces se tiene que ejecutar
   WHILE // se va a seguir ejecutando mientras la condicion sea verdadera
    while (condicion) {
        aca va la que se quiere ejecutar // tenemos que asegurarnos de que la condicino q se ejecuta cambie y de false porque si no caemos en un BUCLE INFINITO
    }

Ej para recorrer un Array hasta que pase algo
    $palabras = ["Hola", "que", "tal", "soy", "Pepe", "BASTA"];
    shuffle($palabras); // shuffle mezcla las palabras

    $i=0; //iniciamos en el primer valor del array
    while($palabras[$i] != "BASTA") { // mientras las palabras sean distintas a BASTA
        echo $palabras[$i]; // imprimime i
        $i++; // e incrementalo de a uno
    }

Pero hay veces que queremos ejecutar el codigo AL MENOS UNA VEZ
    DO WHILE
    do { // primero ejecuta este pedazo de codigo
       echo $palabras[$i];
       $i++;
    } while ($palabras[$i] != "BASTA"); // recien cuando llega a esta linea pregunta si esta condicion es true


KEYWORDS // Palabras que modifican el comportamiento de un bucle
    continue // saltea el paso del codigo en donde se coloca

        for($i=0; $i < ; $i++) {
            if ($i == 3) {
                continue;
            }
        }
        echo "FIN";

    break // termina el bucle pero sigue leyendo el codigo que hay despues, se lee el FIN
    exit // corta todo el php, no se ejecuta nada mas
    return // se utiliza en funciones, la funcion termina la ejecucion de la funcion


3) FOREACH  // Sirve para recorrer un array asociativo
        foreach ($array as $valor) { // la segunda variable debe ser nueva
            echo $valor;
        }

Ej:     $persona = [
            "nombre" => "Dario",
            "apellido" => "Sus",
            "edad" => 87
        ];

        foreach($persona as $valor) {
            echo "$valor <br>";
        }


        //foreach - nos da la ventaja de tomar un valor asosiativo con un key y un valor -

        $alumnos = [
          "mejor alumno" => "Juancito",
          "peor alumno" => "Javier",
          "el que llega tarde" => "Pedrito"
        ];

        echo "El mejor alumno es" . $alumnos["mejor alumno"];


        foreach ($alumnos as $key => $value) { //generalmente va del plural al singular (&alumnos as $alumno), sin $key
          echo "el alumno en posicion" . $key." es ".$value."<br>";
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



QUERYSTRING - son arrays asociativos // SUPERGLOBALES

href=noticias.php?rubro=".rubro.">

//super global TOMA LOS DATOS DE LA URL
// Guarda URL unicas (favoritos, videos youtube, productos mercadolibre, historial)
? --> $_GET ["rubro"] //el ? genera el array asociativo SE USA PARA BUSCAR (buscadores)
? indice1 =valor1 & indice2 = valor2 ...

? --> $_POST // es privado, se usa en formularios, campos de textos, registro, lugares donde quiero mandar la info pero no quiero q sea visible para el usuario. Envia oculto, mas seguridad. SE USA PARA GUARDAR,LOGUERANOS, ACTUALIZAR (info sensible)

$_COOKIE // es info que envia el servidor al cliente con info que necesita quedar guardad en la pc del usuario, se almacena en archivos de texto, no mas de 4kb. Cada navegador tiene sus cookies.
    $cookie_name ="nombre";
    $cookie_value="Juan";
    setcookie($cookie_name, $cookie_value); // setcookie define una cookie y la almacena en el disco duro del usuario y luego es accedida mediante $_COOKIE

    Lectura:
    echo '¡Hola' . $COOKIE["nombre"] . '!';
    ¡Hola Juan!

    // tiempo de expiracion
        $expira = time()+3600; //1 hora, si enviamos tiempo negativo la cookie se elimina Ej. time() - 1
        setcookie("usuario", "pepe", $expira);

    // para preguntar si existe una cookie
        if (isset($_COOKIE['usuario'])) {
            echo "Bienvenido" . $_COOKIE['usuario'];
        }


$_SESSION // una sesion es una forma de guarda info en un servidor, sus valores son unicos para cada usuario
    session_start();

    $_SESSION["color"] = "verde";
    $_SESSIOM["animal"] = "gato";
    echo "Variables de sesion guardadas";

    echo $_SESSION["color"];




OBJETOS
//

Clases --> Se escriben en Upper  Camel Case // para icluir la clase en el archivo principal se usa require_once('');
Atributos --> Son variables que adelante se les pone el scoup (alcance) si es public, private o protected //por default es publilc
    Si son private tengo q pedirselos y el cliente tiene q saber decirmelo a traves de una funcion, voy a realizar alguna validacion:
    Si quiero que mis hijos tengan acceso uso protected
    // asi se usa en el archivo
    $martina->setDni(1234567);

Responsabilidades -->
    public function setDni($dniEnviado){
      $this->dni = $dniEnviado;
    }
    public function getDni(){
      if ($_SESSION['usuarioLogueado'] == "Admin") {
        return $this->dni;
      } echo "quien sos?";
    }

<Interfaces> --> Método abstracto. Es la misma responsabilidad que comparten distintas clases que no heredan los atributos del mismo padre. No le digo COMO si no que implemente la interfaz. Una clase puede heredar de varias interfaces // verbo + able = nadable, volable, comprable, etc

TIENE -----> /* flechita rellena, linea normal */ es un parametro de Atributos
USA -----> /* flecha rellena, linea punteada */  es un parametro de Responsabilidad
HERENCIA -----> /* flecha vacia, linea normal */  se le pregunta al hijo si es un/una del padre , si no es una clase
class Pepito extends Padre

IMPLEMENTA -----> /* flecha rellena, linea punteada */
class Pepito extends Padre implements Interfaz

<<ABSTRACTA>>, tiene atributos y resposabilidades pero no se puede instanciar (crear un objeto de esa clase)


__construct // CONSTRUCTOR class new siempre llama a __construct cuando lo instancias


instanceof // para validar si pertenecea tal clase y puede hacer tal cosa
if $talClase instanceof Clase {
  echo Es una clase;
}

static --> :: // atributos estaticos que me permiten acceder a la clase sin tener que instanciar , porque no es un objeto en particular si no una clase con datos que son comunes
  class UnaClase {
    public static $variable = ["unDato", "otroDato", "otroDato2",];
  }
  var_dump UnaClase::$variable[];

  UnaClase::get$variable();

CLASES CON trait
--> tiene RASGOS, atributos y responsabilidades, como si fuera una clase
--> no se instancia nunca
--> adentro de una clase se escribe
    use NombreDelTrait;












BASE DE DATOS
1) crear el archivo conexion //copiar de carpeta DBPDO de peliculas hecho por juanca
2) crear la pagina de formulario // como la pag de index del blog, me redirige a la home
3) creo el archivo home.php // session_start() , requite('conexion.php'), if POST y prepare del query n execute
4) 

?>
