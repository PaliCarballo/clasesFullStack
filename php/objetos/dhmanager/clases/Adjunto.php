<?php
require_once('Profesor.php');
class Adjunto extends Profesor {
  private $cantidadDeHoras=0;

public function setCantidadDeHoras(int $laCantidadDeHoras) {
  $this->cantidadDeHoras = $laCantidadDeHoras;
}

public function getCantidadDeHoras () {
  return $this->cantidadDeHoras;
}

}

 ?>
