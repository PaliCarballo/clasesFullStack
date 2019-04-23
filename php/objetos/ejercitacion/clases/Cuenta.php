<?php

abstract class Cuenta {
  private $cbu;
  private $balance;
  private $fechaUltimoMovimiento;

  public function __construct($cbu,$balance,$fechaUltimoMovimiento){
    $this->cbu = $cbu;
    $this->balance = $balance;
    $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
  }

  public function getCbu() {
    return $this->cbu;
  }
  public function setCbu($cbu) {
    $this->cbu = $cbu;
  }
  public function getBalance() {
    return $this->balance;
  }
  public function setBalance($balance) {
    $this->balance = $balance;
  }
  public function getFechaUltimoMovimiento() {
    return $this->fechaUltimoMovimiento;
  }
  public function setFechaUltimoMovimiento($fechaUltimoMovimiento){
    $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
  }

  public abstract function debitar($monto, $lugarDeTransaccion);

  public function acreditar($monto) {
    $this->balance = $this->balance + $monto;
    $this->fechaUltimoMovimiento = date('Y-m-d');

  }



}
