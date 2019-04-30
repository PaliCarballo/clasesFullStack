<!DOCTYPE html>
<?php
  session_start();
  require_once 'clases/Usuario.php';

  //si hay alguien logueado que vaya a home
  if (!empty($_SESSION['email'])) {
    header('location:home.php');
  }

  //inicializo las variables
  $errorEmail = "";
  $errorPass= '';
  $errorConfirmarPass = '';
  $email = '';
  $errorAvatar = '';
  $sinErrores = true;

  if ($_POST) {
    $email = $_POST['email'];

    if ($_POST["email"] == '') {
      $errorEmail = "Introduce tu email";
      $sinErrores = false;
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errorEmail = "Email invalido";
      $sinErrores = false;
    }
    if (empty($_POST['password'])) {
      $errorPass = "Introduce una contraseña";
      $sinErrores = false;
    }
    if (empty($_POST['password2'])) {
      $errorConfirmarPass = "Repite la contraseña";
      $sinErrores = false;
    } else if (!empty($_POST['password']) &&
      $_POST['password'] != $_POST['password2']) {
      $errorConfirmarPass = 'Las contraseñas no coinciden';
      $sinErrores = false;
    }

    if ($sinErrores) {
      $avatar = '';
      if ($_FILES['avatar']["error"]===UPLOAD_ERR_OK){
        $tipoImagen = $_FILES['avatar']['type'];
        if ($tipoImagen == 'image/jpg' || $tipoImagen == 'image/jpeg' || $tipoImagen == 'image/png' || $tipoImagen == 'image/gif'){
          $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
          //subo el archivo y lo guardo en la carpeta avatars
          $avatar = 'avatars/'.$_POST['email']. '.' . $ext;
          move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);
        } else {
          //muestro error en tipo de archivo
          $errorAvatar = 'Seleccione una imagen con formato válido';
          $sinErrores = false;
        }
      }
      if ($sinErrores) {
        // hasheo la pass
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // instancio el usuario
        $usuario = new Usuario($_POST['email'], $pass, $avatar);

        $usuarioJson = json_encode($usuario);

        // guardar en el json
        file_put_contents('usuarios.json', $usuarioJson);
        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['avatar'] = $usuario->getAvatar();

        // ir al home del usuario
        header('location:home.php');
      }



    }

  }
?>

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Registrate</h1>
    <form class="" action="" method="POST" enctype="multipart/form-data">
      <label for="email">Email</label>
      <input id="email" type="email" name="email" value="<?php echo $email; ?>"><?php echo $errorEmail; ?><br>
      <label for="pass">Contraseña</label>
      <input id="pass" type="password" name="password"><?php echo $errorPass; ?><br>
      <label for="pass2">Confirmar contraseña</label>
      <input id="pass2" type="password" name="password2"><?php echo $errorConfirmarPass; ?><br>
      <label for="avatar">Avatar</label>
      <input id="avatar" type="file" name="avatar"><?= $errorAvatar ?><br>
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
