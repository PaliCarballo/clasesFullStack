<!DOCTYPE html>
<?php
/*
1ero creo que el formulario
2do action="" y los name del input los defino en php*/
if ($_POST) {
  //guardo los datos que recibo del form
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia'];
  //traigo los datos de mi json
  $usuario = file_get_contents("infousuario.json"); // para traer info de otro json necesito file_get_contents adentro de una variable
  //convierto a array asociativo
  $usuarioEnPhp = json_decode($usuario,true);

  $emailRegistrado = $usuarioEnPhp["email"];
  $contraseniaRegistrada = $usuarioEnPhp["contrasenia"];
  if (password_verify($contrasenia,$contraseniaRegistrada) && $email == $emailRegistrado) {
    echo "Bienvenido {$usuarioEnphp["nombre"]}";
  } else {
    echo "Usuario o Contraseña incorrecta";
}


?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">

    </form>
  </body>
</html>
