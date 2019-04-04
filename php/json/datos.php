<?php
$datos = file_get_contents('datos.json'); //aca vael nombre del archivo que quiero modificar
$datos = json_decode($datos, true); //veo que tiene el archivo json

$datos['agregoUnDato'] = "123 abc"; //se agrega en el navegador
$datosEnJSON = json_encode($datos); //transformo esos datos nuevos en json
file_put_contents('datos.json',$datosEnJSON); //agrego estos contenido al archivo json


?>
