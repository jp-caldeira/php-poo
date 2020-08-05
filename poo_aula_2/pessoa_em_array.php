<?php

$joao = [
    'nome' => 'João',
    'idade' => 18,
    'sexo' => 'masculino'
];

$victor = [
    'nome' => 'Victor',
    'idade' => 28,
    'sexo' => 'masculino'
];

MostrarNomePessoa($victor);
MostrarNomePessoa($joao);


// $pessoa = $victor;
/**
 * Exibe o nome da Pessoa na tela
 * 
 * @param $pessoa Recebe um Array associativo de pessoa que contem o indice nome.
 */
function MostrarNomePessoa($pessoa) {
    echo "NOME: ", $pessoa['nome'], "\n";
}
