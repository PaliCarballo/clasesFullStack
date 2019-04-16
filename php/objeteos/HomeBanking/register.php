<!DOCTYPE html>
<?php
require_once('clases/Cliente.php');
require_once('clases/Validator.php');
$validator = new Validator;
$errorDni = '';

  //si llega algo enviado por POST
  if($_POST){
    //si valida el dato "nombre" vacio
    if($validator->datoVacio("nombre",$_POST['nombre'])){
      //si no esta vacio, creo el nuevo cliente
      $clienteNuevo = new Cliente($_POST['nombre'],$_POST['apellido'],$_POST['dni'],$_POST['cuit']);
      //cargo el dni del nuevo cliente
      // $errorDni = $clienteNuevo->getDni() == null ? 'cargar nuevo dni': '';
      $errorDni = $validator->datoNulo("dni",$clienteNuevo->getDni()) ? 'carga nuevo dni' : '';
    }



  }
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate aca!</title>
  </head>
  <body>
    <form action="" method="POST">
      nombre: <input type="text" name="nombre" value="">
      <br><br>
      apellido: <input type="text" name="apellido" value="">
      <br><br>
      dni: <input type="text" name="dni" value="">
      <span style="font-size: 10px;color:red;">
        <?php
          echo $errorDni;
        ?>
      </span>
      <br><br>
      cuit: <input type="text" name="cuit" value="">
      <br><br>
      <input type="submit" name="" value="Registrate en mi banco!">
    </form>
  </body>
</html>
