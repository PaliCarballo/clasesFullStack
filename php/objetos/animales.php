<?php

class Animal{

  private $ruido;

  public function hacerRuido(){
    echo $this->ruido;
  }
  public function setRuido($ruido){
    $this->ruido = $ruido;
  }
}

class Perro extends Animal{

}

class Gato extends Animal{

}


$firulais = new Perro;
$michi = new Gato;

$firulais->setRuido("uau");
$michi->setRuido("miau");

$michi->hacerRuido();
