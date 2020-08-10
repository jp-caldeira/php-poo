<?php
require 'model/Produto.php';

class ProdutoController {
    public function listar() {
        /**
         * Consulta lista no banco
         */
        $produto = new Produto();
        $lista_produtos = $produto->buscaLista();
        /**
         * Exiba a lista de produtos
         */
        require 'view/produto.php';
    }
}