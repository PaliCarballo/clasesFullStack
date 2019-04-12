<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['nombre'])){
  header('location:home.php');
}

//verifico qu estoy mandando datos
if ($_POST) {
  //guardo los datos que recibo de formulario
  $email = $_POST['email'];
  $contrasenia = $_POST['contrasenia'];
  //traigo los datos en mi json
  $usuario = file_get_contents("usuario.json");
  //convierto a array asociativo
  $usuarioEnphp = json_decode ($usuario , true);
  var_dump($usuarioEnphp);

  //tomo los datos del json para comparar
  $emailRegistrado = $usuarioEnphp["email"];
  $contraseniaRegistrada = $usuarioEnphp["contrasenia"];
  //comparo la validacion de la contraseñarra
  //y si los emails son iguales
  if(password_verify($contrasenia, $contraseniaRegistrada)&& $email ==$emailRegistrado){
    //si da true, da la bienvenida
    $_SESSION['email']=$emailRegistrado;
    $_SESSION['nombre']=$usuarioEnphp['nombre'];
    header("Location:home.php");
  }else{
    //sino avisa que hay error
    echo "usuario y/o contraseña incorrecta";
  }


}

 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="">email</label>
      <input type="email" name="email" value="">
      <label for="">contrasenia</label>
      <input type="password" name="contrasenia" value="">
      <input type="submit" name="" value="enviar">
    </form>
  </body>
</html>
