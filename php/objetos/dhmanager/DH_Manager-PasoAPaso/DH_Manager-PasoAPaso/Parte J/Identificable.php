<?php
  namespace MiApp;
  require_once("Profesor.php");
  require_once("Alumno.php");


trait Identificable {
  private $nombre;
  private $apellido;

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function getNombreCompleto(){
    return $this->getNombre() . ' ' . $this->getApellido();
  }






}
