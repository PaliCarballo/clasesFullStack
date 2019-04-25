<?php
require_once('Profesor.php');
class Titular extends Profesor {
  private $especialidad;

  public function setEspecialidad(string $laEspecialidad) {
    $this->especialidad = $laEspecialidad;
  }

  public function getEspecialidad () {
    return $this->especialidad;
  }
}

 ?>
