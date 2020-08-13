<?php

class Pessoa {
    public $nome;
    public $idade;
    public $sexo;

    public function mostrar_idade() {
        
    }
}

$pessoas = [
    [
        'nome' => "Victor"
    ],
    [
        'nome' => "Alexandre",
        "altura" => 1.7
    ],
    [
        'nome' => "Thiago",
        'peso' => 70
    ]
]

$victor = new Pessoa();
$victor->nome = "Victor";
$victor->idade = 18;
$victor->sexo = 'Indefinido';

$pessoa_vazia = new Pessoa();

echo "OBEJTO: \n";
var_dump($victor);

echo "Array Pessoa: \n";
var_dump([
            "nome" => "Ale",
            "idade" => 20,
            "sexo" => "masculino"
        ]);

// Lista de Pessoas
// $pessoas = [
//     [
//         "nome" => "Ale",
//         "idade" => 20,
//         "sexo" => "masculino"
//     ],[
//         "nome" => "Thiago",
//         "idade" => 18,
//         "sexo" => "masculino"
//     ],
// ];

// $victor = new Pessoa();

// echo "Array Associativo: \n";
// var_dump($pessoas[0]);
