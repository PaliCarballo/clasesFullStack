<?php

require_once('clases/Cliente.php');
require_once('clases/Cuenta.php');
require_once('clases/CuentaCorriente.php');
require_once('clases/Cheque.php');
//es el objeto martina
$cliente = new Cliente("Martina","Daniele",1233341324,"20-234234");
//es una cuenta que puede tener un cliente
$cuentaCorriente = new CuentaCorriente;

//la cuenta corriente, tiene el objeto martina
$cuentaCorriente->cliente = $cliente;
echo "<br>";
$cuentaCorriente->depositar(3000);
$cuentaCorriente->depositar(400);
$cuentaCorriente->extraer(500);

$cheque = new Cheque;
$cheque->setValor(1500);

$cuentaCorriente->depositarCheque($cheque);
echo $cuentaCorriente->consultaSaldo();









// var_dump($cuentaCorriente);
