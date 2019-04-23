<?php

//Defino variables privadas para la clase Cliente
abstract class Cliente{
  protected $cuenta;
  protected $email;
  protected $pass;

//Creo una función constructora con sus parámetros necesarios
  public function __construct($cuenta,$email,$pass){
    $this->setCuenta($cuenta);
    $this->setEmail($email);
    $this->setPass($pass);
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado
  public function setCuenta(int $cuenta){
    $this->cuenta = $cuenta;
  }
  public function getCuenta(){
    return $this->cuenta;
  }
  public function setEmail(string $email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass(string $pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  }
