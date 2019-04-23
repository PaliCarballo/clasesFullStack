<?php

class Validator{

  public $datoVacio = '';
  public $datoNulo = null;

  public function datoVacio($queDato,$dato){
    // echo "El dato ".$queDato." esta vacio.";
    return $dato !== $this->datoVacio;
  }

  public function datoNulo($queDato,$dato){
    return $dato !== $this->datoNulo;
  }

}
