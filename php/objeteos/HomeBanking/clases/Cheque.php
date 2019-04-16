<?php

class Cheque{

  private $valor = 0;
  public $bancoEmisor = "Santander";
  public $fecha = "12/03/2019";


  public function setValor($valor){
    $this->valor = $valor;
  }
  public function getValor(){
    return $this->valor;
  }


}
