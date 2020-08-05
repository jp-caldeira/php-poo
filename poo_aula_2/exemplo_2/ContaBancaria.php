<?php

class ContaBancaria {
    public $ag;
    public $cc;
    public $dinheiro;
    public $limite_saque;

    function sacar($valor) {
        if ($valor > $this->dinheiro) {
            echo "NÃO TEM DINHEIRO SUFICIENTE";
        } else {
            $this->dinheiro -= $valor;
        }
    }

    function transferir($valor, $conta_bancaria) {
        if ($valor > $this->dinheiro) {
            echo "NÃO TEM DINHEIRO SUFICIENTE";
        } else {
            $this->dinheiro -= $valor;
            $conta_bancaria->dinheiro += $valor;
        }
    }
}