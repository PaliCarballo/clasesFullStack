<?php

class Cliente{

  public $nombre;
  public $apellido;
  private $dni;
  public $cuit;
  private $numeroDeCliente = 0;

  public function __construct($nom,$ape,$dni,$cuit){
    if($nom != ''){
      $this->nombre = $nom;
    }
    if($ape != ''){
      $this->apellido = $ape;
    }
    $this->setDni($dni);
    $this->cuit = $cuit;
    if($this->dni != null){
      $this->clienteRegistrado();
    }

  }

  public function setDni($dniEnviado){
    if($dniEnviado > 33000000){
      $this->dni = $dniEnviado;
    }else{
      echo "DNI muy viejo.";
    }

  }

  public function getDni(){
      // if($_SESSION['usuarioLogueado'] == "Admin"){
        return $this->dni;
      // }
      echo "quien sos?";

  }

  public function clienteRegistrado(){
    echo "Ya esta registrado";
  }




}
