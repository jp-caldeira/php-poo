<?php

require 'model/UsuarioModel.php';

class UsuarioController {
    public function exibirUsuarios(){
        $lista = new Usuario;
        $listinha = $lista->listarUsuarios();

        require 'view/indexUsuarios.php';
    }



}


?>