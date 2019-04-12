<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        background: <?php echo isset($_POST['color']) ? $_POST['color'] : 'white'; ?>
      }
    </style>
  </head>
  <body>
    <form class="" action="" method="post">
      <select class="" name="color">
        <option value="blue" <?php echo $_POST['color'] == 'blue'? 'selected' : '' ; ?> >Azul</option>
        <option value="yellow" <?php echo $_POST['color'] == 'yellow'? 'selected' : '' ; ?> >Amarillo</option>
        <option value="green" <?php echo $_POST['color'] == 'green'? 'selected' : '' ; ?> >Verde</option>
        <option value="red" <?php echo $_POST['color'] == 'red'? 'selected' : '' ; ?> >Rojo</option>
        <option value="black" <?php echo $_POST['color'] == 'black'? 'selected' : '' ; ?> >Negro</option>
      </select>
      <input type="submit" name="" value="guardar cambios">
    </form>
  </body>
</html>
