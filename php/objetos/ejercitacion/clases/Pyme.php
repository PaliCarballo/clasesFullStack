<?php

class Pyme extends Cliente{
  private $razonSocial;
  private $cuil;


  public function __construct($cuenta,$email,$pass,$razonSocial,$cuil){
    parent::__construct($cuenta,$email,$pass);
    $this->razonSocial = $razonSocial;
    $this->cuil = $cuil;
  }

  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getRazonSocial(){
    return $this->razonSocial;
  }
  public function setCuil($cuil){
    $this->cuil = $cuil;
  }
  public function getCuil(){
    return $this->cuil;
  }










}
