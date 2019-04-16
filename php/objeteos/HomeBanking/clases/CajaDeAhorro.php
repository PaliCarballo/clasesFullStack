<?php
class CajaDeAhorro extends Cuenta{
  private $tasaDeInteres = 0.05;


  public function agregarInteres(){
    $this->saldo = $this->saldo + $this->saldo*$this->tasaDeInteres;
  }

  public function setTasa($tasa){
    $this->tasaDeInteres = $tasa;
  }

}
