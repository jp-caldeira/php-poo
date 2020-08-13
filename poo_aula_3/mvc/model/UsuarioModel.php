<?php 

class Usuario {
    public function listarUsuarios(){
        $listaUsuarios = file_get_contents('json/users.json');
        $listaUsuarios = json_decode($listaUsuarios, TRUE);
        return $listaUsuarios;
    }
}

