<!DOCTYPE html>
<?php 
    session_start();
    $error = '';
    if($_POST){
        require('conexion.php');
        $query = $conex->prepare('SELECT * FROM usuarios WHERE email = :email');
        $query->bindValue(':email', $_POST['email']);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if($usuario){
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['nombre'] = $usuario['nombre'];
            header('Location:home.php');
        } else {
            $error = 'el usuario no existe';
        }
    }

?>


<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mi Blog</title>
        <form action="" method="POST">
            <label for="">Email:</label>
            <input id="id" type="email" name="name" value="">

            <input type="submit">
            
        </form>
    </head>
    <body>
        
    </body>






</html>