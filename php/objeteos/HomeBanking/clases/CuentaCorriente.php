<?php
class CuentaCorriente extends Cuenta {
  private $montoAlDescubierto = 300;


  public function extraer($monto){
      $saldoPosible= $this->saldo + $this-> montoAlDescubierto;

    if ($monto<=$saldoPosible){
      return $this->saldo=$this->saldo-$monto;
    }
    echo 'fondos insuficientes';

  }

  public function depositarCheque($cheque){
    $this->saldo = $this->saldo + $cheque->getValor();
  }





}

 ?>
