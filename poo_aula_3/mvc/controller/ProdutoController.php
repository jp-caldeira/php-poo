<?php
require 'model/ProdutoModel.php';

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
        require 'view/produto-view.php';
    }
}