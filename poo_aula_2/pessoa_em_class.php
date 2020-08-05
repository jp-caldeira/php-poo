<?php

class Pessoa {
    public $nome;
    public $idade;
    public $sexo;

    function MostraNomePessoa() {
        echo "NOME: ", $this->nome, "\n";
    }

    function recebeValores($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
}

$joao = new Pessoa();
$joao->recebeValores("João", 20, "Masculino");
$joao->MostraNomePessoa();

$victor = new Pessoa();
$victor->recebeValores("Victor", 18, "Masculino");
$victor->MostraNomePessoa();



