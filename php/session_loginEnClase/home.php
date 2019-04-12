<?php
session_start();
if(isset($_SESSION['nombre'])){
  echo "Bienvenido {$_SESSION['nombre']}";
}else{
  header("Location:login.php");
}


?><br>
<a href="cerrarsesion.php">cerrar sesion</a>
