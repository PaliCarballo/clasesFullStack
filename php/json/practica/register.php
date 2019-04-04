

 <!DOCTYPE html>
 <?php
 if ($_POST) {
   $nombre = $_POST["nombre"]; //los name del form son la key del array asosiativo del POST
   $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

   $usuario["nombre"] = $nombre;
   $usuario["contrasenia"] = $password;
   $usuarioEnJson = json_encode($usuario);
   file_put_contents('infousuario.json',$usuarioEnJson);
 }
  ?>

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario en JSON</title>

  </head>
  <body>
    <form class="" action="" method="post">
      <div class="">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" value="">
      </div>
      <div class="">
        <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" value="">
      </div>

      <input type="submit" name="enviar" value="Enviar">


    </form>
  </body>
</html>
