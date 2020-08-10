<?php

class Produto {
    public function buscaLista() {
        // PDO select pra tabela produtos. SELECT * FROM produtos;
        return [
            [
                'nome' => 'Dark Souls III',
                'nota' => 4,
                'ano_lancamento' => 2016
            ],
            [
                'nome' => 'The Last of Us part 2',
                'nota' => 5,
                'ano_lancamento' => 2020
            ],
            [
                'nome' => 'Age of Mythology',
                'nota' => 3.5,
                'ano_lancamento' => 2002
            ],
            [
                'nome' => 'Dead by daylight',
                'nota' => 4.5,
                'ano_lancamento' => 2016
            ],
        ];
    }
}