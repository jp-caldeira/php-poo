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


class Usuario {
    public $nomeUsuario;
    public $email;
    public $senha;
}

function cadastraUsuario ($nomeUsuario, $email, $senha){
        $this->nome = $nomeUsuario;
        $this->email = $email;
        $this->senha = $senha;
}

function showUser() {
    echo "NOME: ", $this->nome, "\n";
    echo "EMAIL: ", 
}



?>
