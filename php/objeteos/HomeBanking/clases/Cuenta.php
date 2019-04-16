<?php

 class Cuenta{
   protected $saldo = 0;
   protected $nroCuenta;
   public $cliente;

   public function depositar($monto){
     $this->saldo = $this->saldo + $monto;
   }
   public function extraer($monto){
     if ($monto<=$this->saldo){
       return $this->saldo=$this->saldo-$monto;
     }
     echo 'fondos insuficientes';
   }
   public function consultaSaldo(){
     return $this->saldo;
   }
 }
