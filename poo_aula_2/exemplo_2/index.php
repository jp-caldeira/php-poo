<?php require 'ContaBancaria.php';

$conta_thiago = new ContaBancaria();
$conta_thiago->ag = 123;
$conta_thiago->cc = '3210-1';
$conta_thiago->dinheiro = 500000;
$conta_thiago->limite_saque = null;

$conta_joao = new ContaBancaria();
$conta_joao->ag = 124;
$conta_joao->cc = '3212-1';
$conta_joao->dinheiro = 2000000;
$conta_joao->limite_saque = null;

$conta_thiago->transferir(100000, $conta_joao);
